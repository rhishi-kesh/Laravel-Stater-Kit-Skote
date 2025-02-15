@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Amounts
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

        <!-- Create Amount Button -->
        <a href="{{ route('amounts.create') }}" class="btn btn-primary mb-3">Create New Amount</a>

        <!-- Amounts Table -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($amounts as $amount)
                    <tr>
                        <td>{{ $amount->id }}</td>
                        <td>{{ $amount->value }}</td>
                        <td>
                            <a href="{{ route('amounts.show', $amount->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('amounts.edit', $amount->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('amounts.destroy', $amount->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this amount?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No amounts found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

