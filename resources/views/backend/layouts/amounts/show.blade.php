@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Amount Details
    </div>
@endsection

@section('page-content')
    <div class="content">
        <h3>Amount: {{ $amount->value }}</h3>
        <a href="{{ route('amounts.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection