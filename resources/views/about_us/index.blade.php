@extends('layout.app')
@section('styles')
@endsection
@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">About Us</h1>
                    <p>Business plan draws on a wide range of knowledge from different business<br> disciplines.
                        Business draws on a wide range of different business .</p>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <h6>{!! $aboutus->description !!}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection

