@extends('layouts.app')

@section('content')
<style>
            #stage{
                position:absolute;
                bottom:5px;
                height:40%;
                width:90%;
                margin:auto;
                z-index:3;
            }
            
            #ali1 {
                position: absolute;
                left: 80%;
                bottom: 3%;
                width: 70px;
                -webkit-filter: brightness(.5);
                filter: brightness(.5);
                transition: left 2s ease-in 1.2s, bottom 2s ease-out 0s, width 3s ease-in 1s, filter 4s ease-out, transform 4s ease-out;
               z-index: 2;;

            }
            #stage:hover #ali1 {
                left:0%;
                bottom: 110%;
                width: 300px;
                -webkit-filter: brightness(1);
                filter: brightness(1);
                transform: rotate(-20deg);
                transition: left 2s ease-out .7s, bottom 2s ease-in 1s, width 3s ease-out 1s, filter 3.5s ease-in, transform 4s ease-in;
                 z-index: 0 !important;;
                 }
            #container{z-index:10;}
 </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
					Your rank:
					<br>
					<img src=<?php
						$uid = \Auth::user()->id;
						use Illuminate\Support\Facades\DB;
						$query = DB::table('users')->select('rank')
												   ->where('id', '=', $uid)
												   ->get();
						$rank = $query[0]->rank;
						echo 'images/usr-rank-'.$rank.'.png';
						?>
					#width="96" height="96">
					<br>
					
                    You are logged in!
                    <br>
                    
                    <a href="ImageUpload" class="btn btn-default"><img src="images/ufoIcon.png" width="42" height="42"> Report Sighting</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="stage"><img id="ali1" src="images/ufo-spaceship.png"/></div>
@endsection
