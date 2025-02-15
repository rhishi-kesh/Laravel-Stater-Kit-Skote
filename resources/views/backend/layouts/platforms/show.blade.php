@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Platform Details
    </div>
@endsection

@section('page-content')
    <div class="content">
        <h3>{{ $platform->name }}</h3>
        <a href="{{ route('platforms.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection