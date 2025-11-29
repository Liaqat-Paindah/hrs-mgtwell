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
                    <h3 class="page-title">Employee View</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee Edit</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Toastr Messages --}}
        {!! Toastr::message() !!}

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class=" color:white mb-0">Edit Employee Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('all/employee/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $employees2[0]->id }}">
                            <input class="form-control" name="employee_id" type="hidden" name="employee_id" value="{{ $employees2[0]->employee_id }}">

                            {{-- Profile Image --}}
                            <div class="form-group mb-4">
                                <label class="fw-bold">Profile Image:</label>
                                <div class="mb-2">
                                    @if(!empty($employees2[0]->profile))
                                    <div class="d-inline-block me-3 text-center">
                                        <img src="{{ URL::to('/assets/images/' . $employees2[0]->profile) }}" alt="Profile" class="img-thumbnail" width="100">

                                    </div>
                                    @endif
                                </div>
                                <label class="btn btn-outline-primary">
                                    Upload New Profile
                                    <input type="file" name="profile" accept="image/*" hidden>
                                </label>
                            </div>

                            {{-- Personal Details --}}
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="name" value="{{ $employees2[0]->name }}">
                                </div>
                                <label class="col-form-label col-md-2">Family Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="fname" value="{{ $employees2[0]->fname }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Email:</label>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="email" value="{{ $employees2[0]->email }}">
                                </div>
                                <label class="col-form-label col-md-2">Birth Date:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control datetimepicker" name="birth_date" value="{{ $employees2[0]->birth_date }}">
                                </div>
                            </div>

                            {{-- NID, Blood Group, Phone --}}
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">NID Number:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nid" value="{{ $employees2[0]->nid }}">
                                </div>
                                <label class="col-form-label col-md-2">Blood Group:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="blood_group" value="{{ $employees2[0]->blood_group }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Phone Number:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="phone" value="{{ $employees2[0]->phone }}">
                                </div>
                                <label class="col-form-label col-md-2">Emergency Number:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="second_phone" value="{{ $employees2[0]->second_phone }}">
                                </div>
                            </div>

                            {{-- Account Details --}}
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Account Number:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="account_number" value="{{ $employees2[0]->account_number }}">
                                </div>
                                <label class="col-form-label col-md-2">Position:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="position" value="{{ $employees2[0]->position }}">
                                </div>
                            </div>



                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Work Station:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="work_station:" name="work_station" value="{{ $employees2[0]->work_station }}">
                                </div>
                                <label class="col-form-label col-md-2">Project:</label>
                                <div class="col-md-4">
                                    <input input type="text" class="form-control" id="project:" name="project" value="{{ $employees2[0]->project }}"">
                                </div>
                            </div>








                            {{-- Gender & Department --}}
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Gender:</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="gender">
                                        <option value="Male" {{ $employees2[0]->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $employees2[0]->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <label class="col-form-label col-md-2">Department:</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="department_id">
                                        @foreach($departments as $department)
                                        <option value="{{ $department->id }}" {{ $employees2[0]->department_id == $department->id ? 'selected' : '' }}>{{ $department->department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Addresses --}}
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Permanent Address:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="permanent_address" value="{{ $employees2[0]->permanent_address }}">
                                </div>
                                <label class="col-form-label col-md-2">Current Address:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="current_address" value="{{ $employees2[0]->current_address }}">
                                </div>
                            </div>

                            {{-- Salary & Account Status --}}
                            <div class="form-group row mb-3">
                                <label class="col-form-label col-md-2">Gross Salary:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="gross_salary" value="{{ $employees2[0]->gross_salary }}">
                                </div>
                                <label class="col-form-label col-md-2">Tax:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="tax" value="{{ $employees2[0]->tax }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label col-md-2">Net Salary:</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="net_salary" value="{{ $employees2[0]->net_salary }}">
                                </div>
                                <label class="col-form-label col-md-2">Account Status:</label>
                                <div class="col-md-4">
                                    <select class="form-control select" name="account_status">
                                        <option value="Active" {{ $employees2[0]->account_status == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="Inactive" {{ $employees2[0]->account_status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            {{-- NID Attachment --}}
                            <div class="form-group mb-4">
                                <label class="fw-bold">NID Attachment:</label>
                                <div class="mb-2">
                                    @if(!empty($employees2[0]->nid_attachment))
                                    <a href="{{ URL::to('/assets/nid/' . $employees2[0]->nid_attachment) }}" target="_blank" class="btn btn-outline-info btn-sm me-2">View Current NID</a>
                                    @endif
                                </div>
                                <label class="btn btn-outline-info">
                                    Upload New NID
                                    <input type="file" name="nid_attachment" accept=".pdf,.jpg,.png" hidden>
                                </label>
                            </div>

                            {{-- Documents Attachments --}}
                            <div class="form-group mb-4">
                                <label class="fw-bold">Document Attachment:</label>
                                <div class="mb-2">
                                    @if(!empty($employees2[0]->documents_attachments))
                                    <a href="{{ URL::to('/assets/document/' . $employees2[0]->documents_attachments) }}" target="_blank" class="btn btn-outline-info btn-sm">View Current Document</a>
                                    @endif
                                </div>
                                <label class="btn btn-outline-info">
                                    Upload New Document
                                    <input type="file" name="documents_attachments" accept=".pdf,.doc,.docx" hidden>
                                </label>
                            </div>


                            {{-- CV Attachment --}}
                            <div class="form-group mb-4">
                                <label class="fw-bold">CV Attachment:</label>
                                <div class="mb-2">
                                    @if(!empty($employees2[0]->cv_attachment))
                                    <a href="{{ URL::to('/assets/cv/' . $employees2[0]->cv_attachment) }}" target="_blank" class="btn btn-outline-info btn-sm">View Current CV</a>
                                    @endif
                                </div>
                                <label class="btn btn-outline-info">
                                    Upload New CV
                                    <input type="file" name="cv_attachment" accept=".pdf,.doc,.docx" hidden>
                                </label>
                            </div>

                            {{-- Submit Button --}}
                            <div class="form-group row">
                                <div class="col-md-12 text-end">
                                    <button type="submit" class="btn btn-success">Update Employee</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->

@section('script')
<script>
    // Checkbox single select
    $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[class='" + $box.attr("class") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
</script>
@endsection
@endsection