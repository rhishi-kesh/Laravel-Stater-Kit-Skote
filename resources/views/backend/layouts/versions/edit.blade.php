@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Edit Version
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Edit Version Form -->
        <form action="{{ route('versions.update', $version->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $version->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection