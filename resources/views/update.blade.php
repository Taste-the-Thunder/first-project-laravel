@extends('layouts.main')

@push('title')
    <title>Update User</title>
@endpush

@section('main-section')
    Update User<br>
    {{$register}}
    <form action="/register/{{ $register->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$register->name}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        <input type="text" name="email" value="{{$register->email}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Update">
    </form>
@endsection
