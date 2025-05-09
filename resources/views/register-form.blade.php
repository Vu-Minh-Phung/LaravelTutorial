@extends('layouts.app')

@section('title', 'Đăng ký')

@section('content')
    <form method="POST" action="/register">
        @csrf
        <div>
            <label>Tên:</label>
            <input type="text" name="name" value="{{ old('name') }}" />
            @error('name')
                <p style="color: red;"> {{ $message }} </p>
            @enderror
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" />
            @error('email')
                <p style="color: red;"> {{ $message }} </p>
            @enderror
        </div>
        <div>
            <label>Mật khẩu:</label>
            <input type="password" name="password" />
            @error('password')
                <p style="color: red;"> {{ $message }} </p>
            @enderror
        </div>
        <button type="submit">Gửi</button>
    </form>
@endsection
