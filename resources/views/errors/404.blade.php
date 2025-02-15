@extends('frontend.app')

@push('style')
    <style>
        .error-page-body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .full-screen-image {
            width: 500px;
        }
    </style>
@endpush

@section('title')
    Page Not Found..!
@endsection

@section('content')
    <main class="error-page-body">
        <img class="full-screen-image" src="{{ asset('frontend/errors/404.svg') }}" alt="">
    </main>
@endsection
