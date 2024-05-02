@extends('layouts.app')
@section('content')
    @include('components.navbar')
    @include('components.header', [
        'page_name' => 'Our Blog',
    ])

    @include('components.blogsection')
    @include('components.footer')
@endsection
