@extends('layouts.app')

@section('title', 'Nhập nhận xét')

@section('content')
<form method="POST" action="/feedback">
    @csrf
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" placeholder="Nhập tên" required />
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Nhập email" required />
    </div>
    <div>
        <label for="message">Message: </label>
        <textarea rows="5" name="message" id="message" placeholder="Nhập tin nhắn" required></textarea>
    </div>
    <button type="submit">Gửi</button>
</form>
@endsection


