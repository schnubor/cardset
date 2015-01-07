@extends('layout.default')

@section('title')
{{ $card->title }}
@stop

@section('content')
  <div class="container top100" id="card">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">
            <h3 class="panel-title">{{ $card->title }}</h3>
          </div>

          <!-- List group -->
          <ul class="list-group">
            @if(!empty($card->front))
              <li class="list-group-item">{{ $card->front }}</li>
            @endif
            @if(!empty($card->back))
              <li class="list-group-item">{{ $card->back }}</li>
            @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="{{ URL::route('sets.show', $card->set_id) }}" class="btn btn-md btn-default">Back to Set</a>
        <button type="button" class="btn btn-default btn-md" disabled="disabled"><i class="fa fa-eye"></i>  {{ $card->views }} views</button>
        <a href="{{ URL::route('cards.edit', $card->id) }}" class="btn btn-md btn-danger"><i class="fa fa-pencil"></i></a>
        {{ Form::open(['route' => ['cards.destroy', $card->id], 'method' => 'delete', 'class' => 'inline', 'onsubmit' => 'return confirm("Do you really want to delete this card?");']) }}
          <button type="submit" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop