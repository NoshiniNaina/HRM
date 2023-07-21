@extends('dashboard')
@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header m-3">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company</h1>
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
                        <a href="{{ route('company.create') }}" style="color: white;">Add Companies</a>
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
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>
                                        @if ($company->logo)
                                            <img src="{{ asset('storage/' . $company->logo) }}"
                                                alt="{{ $company->name }} Logo"
                                                style="max-width: 100px; max-height: 100px;">
                                        @else
                                            No Logo
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('company.destroy', $company->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                        <a href="{{ route('company.show', $company->id) }}" class="btn btn-info">View</a>
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
