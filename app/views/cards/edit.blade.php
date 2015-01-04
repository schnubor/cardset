@extends('layout.default')

@section('title')
Edit Card
@stop

@section('content')
  <div class="container">
    <div class="row top100">
      <div class="col-md-4 col-md-offset-4 well">
        <legend>Edit Card</legend>
        {{ Form::model($card, ['route' => array('cards.update', $card->id), 'method' => 'put']) }}
          <div class="form-group">
            <label for="title">Headline</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Headline" value="{{ $card->title }}">
            @if($errors->first('title'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="front">Front</label>
            <textarea class="form-control" rows="3" name="front" placeholder="Enter Front Content">{{ $card->front }}</textarea>
            @if($errors->first('front'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('front') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="back">Flipside</label>
            <textarea class="form-control" rows="3" name="back" placeholder="Enter Flipside Content">{{ $card->back }}</textarea>
            @if($errors->first('back'))
              <div class="alert alert-danger" role="alert">{{ $errors->first('back') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="set_id">Cardset</label>
            <select name="set_id" id="cardset">
              @foreach($sets as $set)
                <option value="{{ $set->id }}"
                @if($card->id == $set->id)
                  {{ 'selected' }}
                @endif
                >{{ $set->title }}</option>
              @endforeach
            </select>
          </div>
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Edit Card</button>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop