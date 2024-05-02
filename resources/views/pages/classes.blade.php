@extends('layouts.app')
@section('content')
    @include('components.navbar')
    @include('components.header', [
        'page_name' => 'Our Classes',
    ])
    @include('components.classsection')
    @include('components.registration')
    @include('components.footer')
@endsection
