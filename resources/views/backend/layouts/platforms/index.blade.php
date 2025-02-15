@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Platforms
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Platform Button -->
        <a href="{{ route('platforms.create') }}" class="btn btn-primary mb-3">Create New Platform</a>

        <!-- Platforms Table -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($platforms as $platform)
                    <tr>
                        <td>{{ $platform->id }}</td>
                        <td>{{ $platform->name }}</td>
                        <td>
                            <a href="{{ route('platforms.show', $platform->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('platforms.edit', $platform->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('platforms.destroy', $platform->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this platform?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No platforms found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection