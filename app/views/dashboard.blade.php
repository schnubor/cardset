@extends('layout.default')

@section('title')
Dashboard
@stop

@section('content')
  <div class="jumbotron top50">
    <div class="container">
      <h1>Your Cardsets</h1>
      <p>Welcome back, {{ Auth::user()->username }}.</p>
      <a href="{{ URL::route('sets-create') }}" class="btn btn-lg btn-default"><i class="fa fa-plus"></i> Create New Set</a>
    </div>
  </div>

  <div class="container" id="sets">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">
            <h3 class="panel-title">Set title <span class="badge">20</span></h3>
          </div>

          <div class="panel-body">
            <p>Quick learning test!</p>
            <a href="" class="btn btn-md btn-primary">Open Set</a>
            <a href="" class="btn btn-md btn-default">Add Card</a>
          </div>

          <!-- List group -->
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">...</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@stop