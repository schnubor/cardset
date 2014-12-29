@extends('layout.default')

@section('title')
Login
@stop

@section('content')
  <div class="container">
    <div class="row top100">
      <div class="col-md-4 col-md-offset-4 well">
        <legend>Login</legend>
        {{ Form::open(array('route' => 'login')) }}
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
            @if($errors->first('username'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('username') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
            @if($errors->first('password'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
            @endif
          </div>
          <div class="form-group">
            <button class="btn btn-primary pull-right" type="submit">Login</button>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop