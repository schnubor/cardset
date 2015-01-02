@extends('layout.default')

@section('title')
Edit Set
@stop

@section('content')
  <div class="container">
    <div class="row top100">
      <div class="col-md-4 col-md-offset-4 well">
        <legend>Edit Cardset</legend>
        {{ Form::model($set, ['route' => array('sets.update', $set->id), 'method' => 'put']) }}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $set->title }}">
            @if($errors->first('title'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" rows="3" name="description" placeholder="Enter Description">{{ $set->description }}</textarea>
            @if($errors->first('description'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('description') }}</div>
            @endif
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Edit Cardset</button>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop