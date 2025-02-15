@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Blog Details
    </div>
@endsection

@section('page-content')
    <div class="content">
        <h3>{{ $blog->title }}</h3>
        <p><strong>Author:</strong> {{ $blog->author }}</p>
        <p><strong>Created At:</strong> {{ $blog->created_at->format('Y-m-d') }}</p>
        <p><strong>Content:</strong></p>
        <p>{{ $blog->content }}</p>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection