@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')
<div>
    <form method="POST" action="/login">
        @csrf
        <label> Tên: </label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nhập tên" required />
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit"> Gửi </button>
    </form>
</div>
@endsection
