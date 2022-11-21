@extends('layouts.main')

@section('main-section')
    User Info<br>
    <form action="/user-info" method="POST">
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="password" name="confirm_password" placeholder="confirm_password"><br>
        <input type="submit" value="Submit">
    </form>
@endsection
