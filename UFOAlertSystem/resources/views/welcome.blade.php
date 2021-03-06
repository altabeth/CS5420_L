<?php 
	use App\Http\Controllers\WelcomeController; 
	$sightingsinfo = WelcomeController::getRecentSightings();
	$controller = new WelcomeController;
	
	if(isset($_POST['call_decrementRank']))
	{
		$controller->decrementSightingRank($_POST['call_decrementRank']);
	}
	
	if(isset($_POST['call_incrementRank']))
	{
		$controller->incrementSightingRank($_POST['call_incrementRank']);
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
		
		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Scripts -->
    	<script src="{{ asset('js/app.js') }}" defer></script>
		
		<script type="text/javascript">
			function decrementRank(id)
			{
				$.ajax({
					url: 'welcome.blade.php',
					type: 'post',
					data: { "call_decrementRank": id},
					success: function(response) { alert(response); }
				}).error(function(){alert("wrong");});
			}
			
			function incrementRank(id)
			{
				$.ajax({
					url: 'welcome.blade.php',
					type: 'post',
					data: { "call_incrementRank": id},
					success: function(response) { alert(response); }
				});
			}
		</script>
		
		<!-- app CSS -->
		<link href="https://minedice.com/docs/CS4420/2018/Team04/UFOAlertSystem/public/css/app.css" rel="stylesheet">
	
		<title>UFO Alert System</title>
		
		<style>
            html, body {
                background-image: url("images/alien-invasion-background.jpg");
            }
			
			.jumbotron {
				background-image: url("images/space-36978_1280.png");
				background-size: cover;
			}
		</style>
	</head>
	<body>
		@extends('layouts.app')
		@section('content')
		<!-- Scrolling news ticker -->
		<div class="container">
			<div class="row">
				@if($sightingsinfo{0}->rank < 3)
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> Danger Level: Low</strong> <marquee><p style="font-family: Impact; font-size: 18pt">No recent sightings in your area.  Community Reminder: November 26, 2018 7:00 pm.  UFO watch and picnic.  Please bring a dish to pass.</p></marquee>
					</div>
				@endif
				@if($sightingsinfo{0}->rank >= 3 && $sightingsinfo{0}->rank <= 6)
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> Danger Level: Medium</strong> <marquee><p style="font-family: Impact; font-size: 18pt">Potential sighting in your area.  Remain indoors until further notice.  Sighting authentication in progress.  Remain calm.</p></marquee>
					</div>
				@endif
				@if($sightingsinfo{0}->rank > 6)
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> Danger Level: Critical</strong> <marquee><p style="font-family: Impact; font-size: 18pt">CRITICAL ALERT! CONFIRMED UFO SIGHTING IN YOUR AREA.  INVASION IMMINENT.  SEEK SHELTER IMMEDIATELY.</p></marquee>
					</div>
				@endif
			</div>
		</div>

		<!-- Welcome banner -->
		<div class="container">
			<div class="jumbotron text-success border-secondary bg-dark mb-3">
			  <h1 class="display-4">Your Friendly Neighborhood UFO Watch</h1>
			  <p class="lead">Keep your friends and family safe with up-to-date UFO sighting authentication.</p>
			  <hr class="my-4">
			</div>
		</div>
		
		<!-- Card deck shows the latest sightings submissions for users to vote on -->
		<div class="container">
			<div class="card-columns">
				@if(count($sightingsinfo) > 0)
						{{csrf_field() }}
						@foreach($sightingsinfo as $sighting)
						  <div class="card text-success border-success bg-dark mb-3">
							<img class="card-img-top" src="..\public\images\<?php echo $sighting->image?>" alt="No Image Found.">
							<div class="card-body">
							  <h5 class="card-title"><?php echo $sighting->location?></h5>
							  <h6 class="card-subtitle mb-2 text-success">Rank: <?php echo $sighting->rank?></h6>
							  <p class="card-text">Submitted by: user #<?php echo $sighting->user_id?></p>
							  <p class="card-text">Comments: <?php echo $sighting->description?></p>
							  <input type="hidden" name="sightingid" value="<?php echo $sighting->id;?>"/>
							  <button type="submit" class="btn btn-success" name="fake" id="{{$sighting->id}}" onClick="decrementRank(this.id)"> Fake </button>
							  <button type="submit" class="btn btn-danger" name="real" id="{{$sighting->id}}" onClick="incrementRank(this.id)"> Real </button>
							</div>
							<div class="card-footer">
								<small class="text-muted">Uploaded at <?php echo $sighting->created_at?></small>
							</div>
						  </div>
						@endforeach
				@endif
			</div>
		</div>

		<!-- Scrolling news ticker -->
		<div class="container">
			<div class="row">
				@if($sightingsinfo{0}->rank < 3)
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> Danger Level: Low</strong> <marquee><p style="font-family: Impact; font-size: 18pt">No recent sightings in your area.  Community Reminder: November 26, 2018 7:00 pm.  UFO watch and picnic.  Please bring a dish to pass.</p></marquee>
					</div>
				@endif
				@if($sightingsinfo{0}->rank >= 3 && $sightingsinfo{0}->rank <= 6)
					<div class="alert alert-warning alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> Danger Level: Medium</strong> <marquee><p style="font-family: Impact; font-size: 18pt">Potential sighting in your area.  Remain indoors until further notice.  Sighting authentication in progress.  Remain calm.</p></marquee>
					</div>
				@endif
				@if($sightingsinfo{0}->rank > 6)
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> Danger Level: Critical</strong> <marquee><p style="font-family: Impact; font-size: 18pt">CRITICAL ALERT! CONFIRMED UFO SIGHTING IN YOUR AREA.  INVASION IMMINENT.  SEEK SHELTER IMMEDIATELY.</p></marquee>
					</div>
				@endif
			</div>
		</div>
		
		<!-- Bootstrap JS code -->
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
		
		@endsection
	</body>
</html>
