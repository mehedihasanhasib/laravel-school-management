@extends('layouts.app')
@section('content')
    @include('components.navbar')
    @include('components.header', [
        'page_name' => 'Our Teachers',
    ])
    @include('components.teacherssection')
    @include('components.testimonial')
    @include('components.footer')
@endsection
