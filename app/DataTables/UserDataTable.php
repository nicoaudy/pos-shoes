<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->of($query)
            ->editColumn('active', function ($row) {
                return $row->active ? 'Active' : 'Inactive';
            })
            ->addColumn('roles', function ($row) {
                return $row->roles()->pluck('name')->implode(' ');
            })
            ->addColumn('action', function ($row) {
                $edit = '<a href="' . route('admin.users.edit', $row->id) . '" class=\'btn btn-outline-primary\' style="margin-left: 5px;"><i class="fa fa-pencil-alt"></i></a>';
                $delete = '<a data-href="' . route('admin.users.destroy', $row->id) . '" class=\'btn btn-outline-danger\' data-toggle="modal" data-target="#confirm-delete-modal" style="margin-left: 5px;"><i class="fa fa-trash"></i></a>';
                return (userCan('edit user') ? $edit : '') . (userCan('delete user') ? $delete : '');
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->all();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->buttons([
                ['extend' => 'print', 'className' => 'btn xs default mb-2', 'text' => '<i class="fa fa-print"></i>'],
                ['extend' => 'excel', 'className' => 'btn xs default mb-2', 'text' => '<i class="fa fa-file-excel"></i>'],
                ['extend' => 'reload', 'className' => 'btn xs default mb-2', 'text' => '<i class="fa fa-sync"></i>'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => [
                'title' => '#',
                'orderable' => false,
                'searchable' => false,
                'render' => function () {
                    return 'function(data,type,fullData,meta){return meta.settings._iDisplayStart+meta.row+1;}';
                }
            ],
            Column::make('name'),
            Column::make('username'),
            Column::make('email'),
            Column::make('roles'),
            Column::make('active'),
            Column::make('last_login'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}
