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
            <h3 class="card-title">Edit Employee</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('employee.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName"
                        placeholder="Enter first name" value="{{ $employee->firstName }}">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName"
                        placeholder="Enter last name" value="{{ $employee->lastName }}">
                </div>
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <select class="form-control" id="company" name="company">
                        <option value="">Select a company</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter email address" value="{{ $employee->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        placeholder="Enter Phone Number" value="{{ $employee->phone }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
