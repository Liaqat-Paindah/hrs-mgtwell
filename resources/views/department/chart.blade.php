@extends('layouts.master')
@section('content')
@include('sidebar.menubar')




<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> Department</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('departmentlist') }}">Department</a></li>
                        <li class="breadcrumb-item active">Department Details</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <div class="view-icons">
                        <a href="{{ url('all/employee/card') }}" class="grid-view btn btn-link active"><i
                                class="fa fa-th"></i></a>
                        <a href="{{ url('all/employee/list') }}" class="list-view btn btn-link"><i
                                class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Page Header -->

        <!-- Search Filter -->
        <form action="{{ url('all/employee/list/search') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control  required floating" name="employee_id">
                        <label class="focus-label">Employee ID</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control  required floating">
                        <label class="focus-label">Employee Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control  required floating">
                        <label class="focus-label">Position</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="sumit" class="btn btn-success btn-block"> Search </button>
                </div>
            </div>
        </form>
        <!-- Search Filter -->
        {{-- message --}}
        {!! Toastr::message() !!}

 
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->

@endsection