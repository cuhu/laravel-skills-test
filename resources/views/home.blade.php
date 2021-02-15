@extends('layout.app')

@section('content')
    @include('partials.navigation')

    @include('components.login')

    @include('components.blog')
@endsection
