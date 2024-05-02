@extends('layouts.app')
@section('content')
    @include('components.navbar')
    @include('components.header', [
        'page_name' => 'Gallery',
    ])
    @include('components.gallerysection')
    @include('components.footer')
@endsection
