@extends('backend.app')

@section('page-title')
    Company Informations
@endsection

@section('page-content')
    <div class="content">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table to Display Site Info -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Company Title</th>
                    <th>Company Favicon</th>
                    <th>Company Copyright Text</th>
                    <th class="pl-1">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siteInfos as $siteInfo)
                <tr>
                    <td>{{ $siteInfo->title }}</td>
                    <td>
                        @if($siteInfo->fav_icon)
                            <img src="{{ asset('storage/' . $siteInfo->fav_icon) }}" width="50" height="40">
                        @else
                            No Favicon
                        @endif
                    </td>
                    <td>{{ $siteInfo->copy_right_text }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('site-infos.edit', $siteInfo->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Button -->
                        {{-- <form action="{{ route('site-infos.delete', $siteInfo->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-danger btn" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                        </form> --}}
                    </td>     
                </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No records found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
