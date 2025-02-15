@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Create New Card
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Create Card Form -->
        <form action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="platform_id" class="form-label">Platform</label>
                <select class="form-control" id="platform_id" name="platform_id" required>
                    @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- image --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="seller" class="form-label">Seller</label>
                <input type="text" class="form-control" id="seller" name="seller" value="{{ old('seller') }}">
                @error('seller')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="voucher">Voucher</option>
                    <option value="gift_card">Gift Card</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="base_price" class="form-label">Base Price</label>
                <input type="number" class="form-control" id="base_price" name="base_price" step="0.50" value="{{ old('base_price') }}">
                @error('base_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" step="0.50" value="{{ old('discount') }}">
                @error('discount')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- version --}}

            <div class="mb-3">
                <label for="versions">Versions</label>
                <select class="js-example-basic-multiple form-control" name="versions[]" multiple="multiple">
                    @foreach ($versions as $version)
                        <option value="{{ $version->id }}">{{ $version->name }}</option>
                    @endforeach
                </select>
                @error('versions')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="amounts">Available Amounts</label>
                <select name="amounts[]" id="amounts" class="form-control" multiple value="{{ old('amounts') }}">
                    @foreach ($amounts as $amount)
                        <option value="{{ $amount->id }}">{{ $amount->value }}</option>
                    @endforeach
                </select>
            </div> --}}
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
                <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
                @error('stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="usage" class="form-label">Usage</label>
                <input type="text" class="form-control" id="usage" name="usage" value="{{ old('usage') }}">
                @error('usage')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="delivery_time" class="form-label">Delivery time</label>
                <input type="text" class="form-control" id="delivery_time" name="delivery_time" value="{{ old('delivery_time') }}">
                @error('delivery_time')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
