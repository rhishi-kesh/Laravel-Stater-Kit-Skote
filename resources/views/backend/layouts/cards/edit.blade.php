@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Edit Card
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Edit Card Form -->
        <form action="{{ route('cards.update', $card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="platform_id" class="form-label">Platform</label>
                <select class="form-control" id="platform_id" name="platform_id" required>
                    @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}" {{ $card->platform_id == $platform->id ? 'selected' : '' }}>
                            {{ $platform->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $card->title }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $card->image }}">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="seller" class="form-label">Seller</label>
                <input type="text" class="form-control" id="seller" name="seller" value="{{ $card->seller }}">
                @error('seller')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="voucher" {{ $card->type == 'voucher' ? 'selected' : '' }}>Voucher</option>
                    <option value="gift_card" {{ $card->type == 'gift_card' ? 'selected' : '' }}>Gift Card</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="base_price" class="form-label">Base Price</label>
                <input type="number" class="form-control" id="base_price" name="base_price"
                    value="{{ $card->base_price }}" step="0.01" required>
                @error('base_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" value="{{ $card->discount }}"
                    step="0.01" required>
                @error('discount')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="amounts">Available Amounts</label>
                <select class="js-example-basic-multiple form-control" name="amounts[]" multiple="multiple">
                    @foreach ($amounts as $amount)
                        <option value="{{ $amount->id }}">{{ $amount->value }}</option>
                    @endforeach
                </select>
                @error('amounts')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $card->stock }}"
                    required>
                @error('stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="usage" class="form-label">Usage</label>
                <input type="text" class="form-control" id="usage" name="usage" value="{{ $card->usage }}"
                    required>
                @error('usage')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $card->description }}" required>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="delivery_time" class="form-label">Delivery time</label>
                <input type="text" class="form-control" id="delivery_time" name="delivery_time"
                    value="{{ $card->delivery_time }}">
                @error('delivery_time')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
