@extends('backend.app')

@section('page-title')
    <div class="title pt-2">
        Create New Platform
    </div>
@endsection

@section('page-content')
    <div class="content">
        <!-- Create Platform Form -->
        <form action="{{ route('platforms.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Platform Name</label>
                <input type="text" class="form-control" id="name" name="name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="name" class="form-label">Platform Name</label>
                <select class="js-example-basic-single" name="name">
                    <option value="steam">STEAM</option>
                    <option value="googlestore">GOOGLE STORE</option>
                    <option value="applestore">APPLE STORE</option>
                    <option value="xbox">XBOX</option>
                    <option value="playstation">PLAYSTATION</option>
                    <option value="fortnite">FORTNITE</option>
                    <option value="roblox">ROBLOX</option>
                    <option value="minecraft">MINECRAFT</option>
                    <option value="pc">PC</option>
                    <option value="mobile">MOBILE</option>
                  </select>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div> --}}

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection