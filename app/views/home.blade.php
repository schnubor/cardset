<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cardset</title>
  
  <?= javascript_include_tag() ?>
  <link href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <?= stylesheet_link_tag() ?>
  <link href="{{ asset('bower/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">

</head>
<body>
  <div class="container">
  	<header>
  		<h1 id="logo" class="big"><span class="red">C</span>ARDSET</h1>
  		<h2>A clean and simple cue card solution.</h2>

  		<button class="btn btn-lg btn-primary">Register</button>
  		<button class="btn btn-lg btn-default">Sign in</button>
  	</header>
  </div>
  
	<section class="description">
		
	</section>

	<footer>
		
	</footer>

  <script src="{{ asset('bower/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>