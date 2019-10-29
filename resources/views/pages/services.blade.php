@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>Services</h1>
    <p>This is my services page</p>    
    @if(count($services) > 0)
        <h2>Our services</h2>
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection