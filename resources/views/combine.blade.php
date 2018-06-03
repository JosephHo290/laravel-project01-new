@extends('layouts.master')
@section('title', 'my page title')
@section('content')
<p>This is my body content.</p>
<img src="{{asset('img/post-bg.jpg')}}" width=200>
<h2 style="color:red;">Firstname = {{$firstname}}; Lastname = {{$lastname}}</h2>
@endsection