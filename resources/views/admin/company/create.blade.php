@extends('dashboard')
@section('contents')
    <!-- general form elements -->
    <div class="row m-3">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 d-flex justify-content-end">
            <button type="button" class="btn btn-success">
                <a href="{{ route('company.index') }}" style="color: white;">Back</a>
            </button>
        </div>
    </div>
    <div class="card card-primary m-3">
        <div class="card-header">
            <h3 class="card-title">Company info</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter company name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <label for="logo">Company Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo">
                            <label class="custom-file-label" for="logo">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
