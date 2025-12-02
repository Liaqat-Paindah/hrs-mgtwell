@extends('layouts.master')
@section('content')
@include('sidebar.menubar')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Organization Chart</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Organization Chart</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tree-container">
                            @foreach($departments as $department)
                            <div class="department-tree mb-4">
                                <div class="department-header bg-light p-3 mb-3">
                                    <h4 class="mb-0">
                                        <i class="fa fa-building"></i> 
                                        {{ $department->department }}
                                        @if($department->department_head_id)
                                            <small class="text-muted">
                                                - Head: {{ $department->head->name ?? 'Not assigned' }}
                                            </small>
                                        @endif
                                    </h4>
                                </div>
                                
                                <div class="row">
                                    @foreach($department->employees as $employee)
                                    <div class="col-md-3 mb-3">
                                        <div class="card employee-card">
                                            <div class="card-body text-center">
                                                @if($employee->profile)
                                                    <img src="{{ asset('storage/profiles/'.$employee->profile) }}" 
                                                         class="rounded-circle mb-2" width="60" height="60" alt="Profile">
                                                @else
                                                    <img src="{{ asset('assets/img/default-user.png') }}" 
                                                         class="rounded-circle mb-2" width="60" height="60" alt="Profile">
                                                @endif
                                                <h6 class="mb-1">{{ $employee->name }}</h6>
                                                <p class="text-muted mb-1 small">{{ $employee->position }}</p>
                                                <span class="badge badge-primary">{{ $employee->employee_id }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.tree-container {
    font-family: Arial, sans-serif;
}
.department-tree {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
}
.department-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}
.employee-card {
    transition: transform 0.2s;
    border: 1px solid #e0e0e0;
}
.employee-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
</style>
@endsection