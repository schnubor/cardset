@extends('layout.default')

@section('title')
Dashboard
@stop

@section('content')
  <div class="jumbotron top50">
    <div class="container">
      <h1>Welcome back, {{ Auth::user()->username }}</h1>
    </div>
  </div>
@stop