@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Create New Amount
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Create Amount Form -->
        <form action="{{ route('amounts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="value" class="form-label">Value</label>
                <input type="number" class="form-control" id="value" name="value" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection