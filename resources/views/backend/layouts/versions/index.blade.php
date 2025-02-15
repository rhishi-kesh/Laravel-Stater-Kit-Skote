@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Versions
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

        <!-- Create Version Button -->
        <a href="{{ route('versions.create') }}" class="btn btn-primary mb-3">Create New Version</a>

        <!-- Versions Table -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($versions as $version)
                    <tr>
                        <td>{{ $version->id }}</td>
                        <td>{{ $version->name }}</td>
                        <td>
                            <a href="{{ route('versions.show', $version->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('versions.edit', $version->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('versions.destroy', $version->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this version?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No versions found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection