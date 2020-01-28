<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ImpersonateDataTable extends DataTable
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
            ->editColumn('username', function ($row) {
                return '<a href="' . route('impersonate.impersonate', $row->id) . '" class=\'btn btn-outline-primary\' style="margin-left: 5px;">'. $row->username .'</a>';
            });
    }

    public function query(User $model)
    {
        return $model->where('id', '<>', auth()->user()->id)->get();
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
            Column::make('name')->addClass('text-center'),
            Column::make('username')->addClass('text-center'),
            Column::make('email')->addClass('text-center'),
            Column::make('created_at')->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Impersonate_' . date('YmdHis');
    }
}
