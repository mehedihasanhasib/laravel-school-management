@extends('layouts.app')
@section('content')
    @include('components.navbar')
    @include('components.header', [
        'page_name' => 'About Us',
    ])
    @include('components.aboutsection')
    @include('components.facilities')
    @include('components.teacherssection')
    @include('components.footer')
@endsection
