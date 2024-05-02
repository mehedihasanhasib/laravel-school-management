@extends('layouts.app')
@section('content')
    @include('components.navbar')
    @include('components.header', [
        'page_name' => 'Blog Detail',
    ])
    @include('components.singleblog')

    @include('components.footer')
@endsection
