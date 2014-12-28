@extends('layout.default')

@section('title')
Register
@stop

@section('content')
  <div class="container">
    <div class="row topMargin">
      <div class="col-md-4 col-md-offset-4 well">
        <legend>Register</legend>
        {{ Form::open(array('route' => 'register')) }}
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
            @if($errors->first('username'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('username') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
            @if($errors->first('email'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
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
            <label for="password_again">Password again</label>
            <input type="password" class="form-control" name="password_again" placeholder="Enter Password again">
            @if($errors->first('password_again'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('password_again') }}</div>
            @endif
          </div>
          <div class="form-group">
            <button class="btn btn-primary pull-right" type="submit">Register</button>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop