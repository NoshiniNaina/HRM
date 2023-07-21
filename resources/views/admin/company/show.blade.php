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
            <h3 class="card-title">Company Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <p>{{ $company->name }}</p>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <p>{{ $company->email }}</p>
            </div>
            <div class="form-group">
                <label for="logo">Company Logo</label>
                @if ($company->logo)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }} Logo"
                            style="max-width: 100px; max-height: 100px;">
                    </div>
                @else
                    <p>No logo available</p>
                @endif
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
