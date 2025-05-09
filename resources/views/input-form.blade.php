@extends('layouts.app')

@section('title', 'Nhập tên')

@section('content')
<form method="POST" action="/input-name">
    @csrf
    <label for="name"> Nhập tên của bạn </label>
    <input type="text" name="name" id="name" required placeholder="Nhập tên của bạn" />
    <button type="submit">Gửi</button>
</form>
@endsection
