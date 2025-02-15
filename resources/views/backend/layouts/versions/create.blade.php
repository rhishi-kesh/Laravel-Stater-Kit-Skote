@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Create New Version
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Create Version Form -->
        <form action="{{ route('versions.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection