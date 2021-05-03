@extends('layouts.backend.app')
@push('title') Dashboard @endpush
@push('style')
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('assets/backend/dist/css/pages/dashboard1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/dist/css/pages/icon-page.css') }}" rel="stylesheet">
@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Doctor Dashboard</h4>
        </div>
    </div>
@endsection
@section('content')
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div class="card">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">Under development</h1>
                        <h6 class="text-white">Complete Appointment</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')

@endpush
