@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Edit Amount
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Edit Amount Form -->
        <form action="{{ route('amounts.update', $amount->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="value" class="form-label">Value</label>
                <input type="number" class="form-control" id="value" name="value" value="{{ $amount->value }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection