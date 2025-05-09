@extends('layouts.app')

@section('title', 'Đăng nhập thành công')

@section('content')
<p>Chào {{ $name }}</p>
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@endsection
