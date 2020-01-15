@extends('laraboi.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="text-center">
                <img src="{{ auth()->user()->avatar == 'default.jpg' ? asset('images/default.jpg') : get_file_from_storage('/', auth()->user()->avatar) }}" class="img-circle img-thumbnail rounded-circle mb-4" alt="profile" style="height: 150px">
            </div>
        </div>
        <div class="col-sm-9">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="username"><h4>Username</h4></label>
                    <input type="text" class="form-control" name="username" placeholder="Username" readonly value="{{ auth()->user()->username }}">
                </div>
                <div class="form-group">
                    <label for="email"><h4>Email</h4></label>
                    <input type="text" class="form-control" name="email" placeholder="Email" readonly value="{{ auth()->user()->email }}">
                </div>
                <div class="form-group">
                    <label for="last_login"><h4>Last Login</h4></label>
                    <input type="text" class="form-control" name="last_login" placeholder="Last Login" readonly value="{{ auth()->user()->last_login }}">
                </div>
                 <div class="form-group">
                    <div class="input-group mb-3">
                        <label class="custom-file border">
                            <input type="file" name="avatar" class="custom-file-input">
                            <span class="custom-file-control pr-3" style="white-space: nowrap;">Change Photo</span>
                            <div class="input-group-append">
                                <span class="input-group-text">Select</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
