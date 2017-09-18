@extends('master')


@section('content')

    @foreach($posts as $post)

        @include('components.post') 
    
    @endforeach

@endsection