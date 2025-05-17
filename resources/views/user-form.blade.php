@extends('layouts.app')

@section('title', 'Đăng ký người dùng')

@section('content')
    <form method="POST" action="/users/create">
        @csrf
        <label>Tên</label>
        <input type="text" name="name" value="{{ old('name') }}" required placeholder="Nhập tên" />
        @error('name')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">
            Đăng ký
        </button>
        <div>
            <a href="/users">Danh sách người dùng</a>
        </div>
    </form>
@endsection
