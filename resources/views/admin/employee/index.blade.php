@extends('dashboard')
@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header m-3">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <button type="button" class="btn btn-success">
                        <a href="{{ route('employee.create') }}" style="color: white;">Add Employee</a>
                    </button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row m-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Phone no</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->firstName }}</td>
                                <td>{{ $employee->lastName }}</td>
                                <td>{{ $employee->company->name ?? 'No Company' }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                {{-- <td>{{ $employee->company->name }}</td>  --}}
                                <td>
                                    <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
