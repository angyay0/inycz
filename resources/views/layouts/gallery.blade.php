@extends('layouts.master')

@section('title', 'Page Title')

@section('header')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @foreach ($properties as $property)
        <p>This is user {{ $property->id }}</p>
    @endforeach
@endsection
