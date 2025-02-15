@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Version Details
    </div>
@endsection

@section('page-content')
    <div class="content">
        <h3>Version: {{ $version->name }}</h3>
        <a href="{{ route('versions.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection