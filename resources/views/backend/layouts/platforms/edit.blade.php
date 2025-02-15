@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Edit Platform
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Edit Platform Form -->
        <form action="{{ route('platforms.update', $platform->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Platform Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $platform->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection