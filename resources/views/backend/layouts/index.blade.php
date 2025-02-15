@extends('backend.app')



@section('page-title')
    Admin Dashboard
@endsection

@section('page-content')
    <table class="table table-stripped table-dark">
        <thead>
            <tr>
                <th>Total Cards</th>
                <th>Total Vouchers</th>
                <th>Total Blogs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $cards }}</td>
                <td>{{ $vouchers }}</td>
                <td>{{ $blogs }}</td>
            </tr>
        </tbody>
    </table>
@endsection