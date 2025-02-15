@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Cards
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

        <!-- Create Card Button -->
        <a href="{{ route('cards.create') }}" class="btn btn-primary mb-3">Create New Card</a>

        <!-- Cards Table -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Platform</th>
                    <th>Image</th>
                    <th>Seller</th>
                    <th>Type</th>
                    <th>Base Price</th>
                    <th>Discount</th>
                    <th>Stock</th>
                    <th>Usage</th>
                    <th>Description</th>
                    <th>Delivery Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cards as $card)
                    <tr>
                        <td>{{ $card->id }}</td>
                        <td>{{ $card->title }}</td>
                        <td>{{ $card->platform->name }}</td>
                        <td><img src="{{ asset('storage/' . $card->image) }}" width="50" height="50"></td>
                        <td>{{ $card->seller }}</td>
                        <td>{{ ucfirst($card->type) }}</td>
                        <td>${{ number_format($card->base_price, 2) }}</td>
                        <td>{{ $card->discount }}</td>
                        <td>{{ $card->stock }}</td>
                        <td>{{ $card->usage }}</td>
                        <td>{{ $card->description }}</td>
                        <td>{{ $card->delivery_time }}</td>
                        <td>
                            <a href="{{ route('cards.show', $card->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('cards.destroy', $card->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this card?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="13" class="text-center">No cards found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection