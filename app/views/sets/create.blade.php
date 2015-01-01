@extends('layout.default')

@section('title')
Create Set
@stop

@section('content')
  <div class="container">
    <div class="row top100">
      <div class="col-md-4 col-md-offset-4 well">
        <legend>Create Cardset</legend>
        {{ Form::open(array('route' => 'store-set')) }}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
            @if($errors->first('title'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" rows="3" name="description" placeholder="Enter Description"></textarea>
            @if($errors->first('description'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('description') }}</div>
            @endif
          </div>
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Create Cardset</button>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop