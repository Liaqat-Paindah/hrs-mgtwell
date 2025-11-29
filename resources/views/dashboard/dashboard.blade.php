@php
    use Carbon\Carbon;
@endphp
@extends('layouts.master')
@section('content')

    @include('sidebar.menubar')
    <div class="page-wrapper">

        <div class="content container-fluid">
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- Statistics Widget -->
        </div>
        <!-- /Page Content -->
    </div>

@endsection