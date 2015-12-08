@extends('layouts.master')

@section('title', 'Page Title')

@section('header')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    {{$property->name}} {{$property->type->name}} {{$property->operation->name}}
@endsection
