@extends('layouts.app')

@section('title', 'Danh sách người dùng');

@section('content')
    <div>
        <h2>Danh sách người dùng</h2>
        <div>
            <ul>
                @foreach($users as $user)
                    <li>{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <a href="/users/create">Đăng ký người dùng</a>
        </div>
    </div>
@endsection
