@extends('layouts.app')

@section('title', 'Kết quả nhận xét')

@section('content')
    <div>
        <p>Cảm ơn {{ $name }} đã góp ý</p>
        <p>Chúng tôi sẽ liên hệ bạn qua email {{ $email }}</p>
        <p>Nội dụng: {{ $message }}</p>
    </div>
@endsection
