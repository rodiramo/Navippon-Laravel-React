@extends('layouts.main')

@section('main')
    <header>
        <h1>Admin Panel</h1>
        <ul>
            <li><a href="{{ route('userList') }}" class="btn btn-primary">User List</a></li>
        </ul>
    </header>
@endsection
