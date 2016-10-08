@extends('layouts.app')

@section('title','Home')

@section('body')
<h3>This is home</h3>
<a href="{{url('/')}}/login">Login</a>
<a href="{{url('/')}}/signup">Signup</a>


@stop
