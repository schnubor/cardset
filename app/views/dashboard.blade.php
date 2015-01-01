@extends('layout.default')

@section('title')
Dashboard
@stop

@section('content')
  <div class="jumbotron top50">
    <div class="container">
      <h1>Your Cardsets</h1>
      <p>Welcome back, {{ Auth::user()->username }}.</p>
      <a href="{{ URL::route('create-set') }}" class="btn btn-lg btn-primary"><i class="fa fa-plus"></i> Create New Set</a>
      <a href="{{ URL::route('create-card') }}" class="btn btn-lg btn-default">Add Cards</a>
    </div>
  </div>

  <div class="container" id="sets">
    <div class="row">
      @foreach($sets as $set)
        <div class="col-md-4">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
              <h3 class="panel-title">{{ $set->title }} <span class="badge">{{ $cards->count() }}</span></h3>
            </div>

            <div class="panel-body">
              <p>{{ $set->description }}</p>
              <a href="{{ URL::route('show-set', $set->id) }}" class="btn btn-md btn-primary">Open Set</a>
              <a href="{{ URL::route('create-card') }}" class="btn btn-md btn-default">Add Card</a>
              <a href="" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></a>
            </div>

            <!-- List group -->
            <ul class="list-group">
              @foreach($cards->slice(0,3) as $card)
                <li class="list-group-item">{{ $card->title }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop