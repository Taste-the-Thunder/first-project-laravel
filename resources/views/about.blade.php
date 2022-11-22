@extends('layouts.main')

@push('title')
    <title>About</title>
@endpush

@section('main-section')
        About Page<br>
        {{ $fullName }}<br>
        {!! $college !!} <br>

        @if ($fullName == 'rajni kant')
            hurreeeee<br><br>
        @elseif($fullName == 'Dhruvin prajapati')
            Dhruvin
        @endif

        @foreach ($student as $students)
            {{ $students }}<br>
        @endforeach
@endsection
