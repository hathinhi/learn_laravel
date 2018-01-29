@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @foreach ($users as $user)
    <li><a href={{url("/user/detail/{$user->id}")}}>{{ $user->name }}</a></li>
    @endforeach
@stop
