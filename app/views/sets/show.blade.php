@extends('layout.default')

@section('title')
Create Set
@stop

@section('content')
  <div class="jumbotron top50">
    <div class="container">
      <h1>{{ $set->title }}</h1>
      <p>{{ $set->description }}.</p>
      <a href="{{ URL::route('cards.create') }}" class="btn btn-lg btn-primary">Add Cards</a>
      <a href="{{ URL::route('users.show', Auth::user()->id) }}" class="btn btn-lg btn-default">Back To Sets</a>
    </div>
  </div>

  <div class="container" id="sets">
    <div class="row">
      @foreach($cards as $card)
        <div class="col-md-4">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
              <h3 class="panel-title">{{ $card->title }}</h3>
            </div>

            <div class="panel-body">
              <a href="{{ URL::route('cards.show', $set->id) }}" class="btn btn-md btn-primary">View Card</a>
              <a href="{{ URL::route('cards.edit', $set->id) }}" class="btn btn-md btn-danger"><i class="fa fa-pencil"></i></a>
              {{ Form::open(['route' => ['cards.destroy', $card->id], 'method' => 'delete', 'class' => 'inline', 'onsubmit' => 'return confirm("Do you really want to delete this card?");']) }}
                <button type="submit" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></button>
              {{ Form::close() }}
            </div>

            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">{{ $card->front }}</li>
              <li class="list-group-item">{{ $card->back }}</li>
            </ul>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop