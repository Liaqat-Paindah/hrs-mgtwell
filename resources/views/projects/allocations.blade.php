@extends('layouts.master')

@section('content')
@include('sidebar.menubar')

<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title text-primary">Project Allocations</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Project Allocations</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row">

            @foreach($projects as $project)
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 rounded-4 hover-shadow" style="min-height: 260px;">
                    <div class="card-body">

                        <!-- Project Name -->
                        <h5 class="card-title fw-bold text-dark">
                            {{ $project->project_name }}
                        </h5>

                        <!-- Project Meta Details -->
                        <p class="card-text mb-2">
                            <span class="text-muted d-block">
                                Code: <strong>{{ $project->project_code }}</strong>
                            </span>

                            <span class="text-muted d-block">
                                <i class="fa fa-user-tie me-1"></i>
                                Client: <strong>{{ $project->client }}</strong>
                            </span>

                            <span class="text-muted d-block">
                                <i class="fa fa-calendar-check me-1"></i>
                                Start: <strong>{{ \Carbon\Carbon::parse($project->start_date)->format('M d, Y') }}</strong>
                            </span>

                            <span class="text-muted d-block">
                                <i class="fa fa-calendar-times me-1"></i>
                                End: <strong>{{ \Carbon\Carbon::parse($project->end_date)->format('M d, Y') }}</strong>
                            </span>

                            <!-- Status Badge -->
                            <span class="mt-1 d-block">
                                <span class="badge 
                                    {{ $project->status == 'active' ? 'bg-success' : ($project->status == 'completed' ? 'bg-primary' : 'bg-warning') }}">
                                    {{ strtoupper($project->status) }}
                                </span>
                            </span>
                        </p>

                        <hr>

                        <!-- Team Count -->
                        <p class="card-text mb-3">
                            <strong class="text-dark">
                                <i class="fa fa-users me-2"></i>
                                Team Members: 
                                {{ $project->assignments->where('assignment_status', 'active')->count() }}
                            </strong>
                        </p>

                        <!-- Button -->
                        <a href="{{ url('/project/employee-list/'.$project->id) }}" 
                           class="btn btn-primary btn-sm w-100 rounded-pill">
                            <i class="fa fa-eye me-1"></i> View Team
                        </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>

@endsection
