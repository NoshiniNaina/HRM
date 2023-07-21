@extends('dashboard')
@section('contents')
    <!-- general form elements -->
    <div class="row m-3">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 d-flex justify-content-end">
            <button type="button" class="btn btn-success">
                <a href="{{ route('employee.index') }}" style="color: white;">Back</a>
            </button>
        </div>
    </div>
    <div class="card card-primary m-3">
        <div class="card-header">
            <h3 class="card-title">Employee info</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            <p><strong>First Name:</strong> {{ $employee->firstName }}</p>
            <p><strong>Last Name:</strong> {{ $employee->lastName }}</p>
            <p><strong>Company Name:</strong> {{ $employee->company->name ?? 'No Compnay' }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
        </div>
    </div>
    <!-- /.card -->
@endsection
