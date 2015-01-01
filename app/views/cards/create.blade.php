@extends('layout.default')

@section('title')
Create Card
@stop

@section('content')
  <div class="container">
    <div class="row top100">
      <div class="col-md-4 col-md-offset-4 well">
        <legend>Add A New Card</legend>
        {{ Form::open(array('route' => 'store-card')) }}
          <div class="form-group">
            <label for="title">Headline</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Headline">
            @if($errors->first('title'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="front">Front</label>
            <textarea class="form-control" rows="3" name="front" placeholder="Enter Front Content"></textarea>
            @if($errors->first('front'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('front') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="back">Flipside</label>
            <textarea class="form-control" rows="3" name="back" placeholder="Enter Flipside Content"></textarea>
            @if($errors->first('back'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('back') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="set_id">Cardset</label>
            <select name="set_id" id="cardset">
              @foreach($sets as $set)
                <option value="{{ $set->id }}">{{ $set->title }}</option>
              @endforeach
            </select>
          </div>
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Add Card</button>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop