@extends('layouts.main')

@push('title')
    <title>Register</title>
@endpush

@section('main-section')
    Register<br>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror
        <input type="password" name="password" placeholder="password"><br>
        @error('password')
            {{$message}}<br>
        @enderror
        <input type="password" name="confirm_password" placeholder="confirm_password"><br>
        @error('confirm_password')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Submit">
    </form>
@endsection
