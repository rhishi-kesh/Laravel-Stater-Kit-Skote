{{-- @extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Card Details
    </div>
@endsection

@section('page-content')
    <div class="content">
        <h3>{{ $card->title }}</h3>
        <p><strong>Platform:</strong> {{ $card->platform->name }}</p>
        <p><strong>Seller:</strong> {{ $card->seller }}</p>
        <p><strong>Type:</strong> {{ ucfirst($card->type) }}</p>
        <p><strong>Base Price:</strong> ${{ number_format($card->base_price, 2) }}</p>
        <p><strong>Stock:</strong> {{ $card->stock }}</p>
        <a href="{{ route('cards.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection --}}


@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Card Details
    </div>
@endsection

@section('page-content')
    <div class="content">
        <div class="card">
            <div class="card-title text-center p-2 bg-primary">
                <h3>{{ $card->title }}</h3>
            </div>
            <div class="card-body display-fluid">
                <div>
                    <img src="{{ asset('storage/' . $card->image) }}" width="50" height="50">
                </div>
                <div>
                    <p><strong>Platform:</strong> {{ $card->platform->name }}</p>
                    <p><strong>Seller:</strong> {{ $card->seller }}</p>
                    <p><strong>Type:</strong> {{ ucfirst($card->type) }}</p>
                    <p><strong>Base Price:</strong> ${{ number_format($card->base_price, 2) }}</p>
                    <p><strong>Stock:</strong> {{ $card->stock }}</p>
                    <p><strong>Description:</strong> {{ $card->description }}</p>
                    <p><strong>Delivery Time:</strong> {{ $card->delivery_time }}</p>
                    {{-- versions --}}
                    <h4>Available Versions</h4>
                    @if ($card->versions->isEmpty())
                        <p>No versions available for this card.</p>
                    @else
                        <ul>
                            @foreach ($card->versions as $version)
                                <li>{{ $version->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <!-- Available Amounts Section -->
                    <h4>Available Amounts</h4>
                    @if ($card->amounts->isEmpty())
                        <p>No amounts available for this card.</p>
                    @else
                        <ul>
                            @foreach ($card->amounts as $amount)
                                <li>${{ $amount->value }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        <a href="{{ route('cards.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection


