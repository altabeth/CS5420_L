<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/*public function __construct()
	{
		$this->middleware('guest');
	}*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	
	/**
	 * Get an array of  uploads
	 *
	 * @return sightinginfo
	 */
	public static function getRecentSightings()
	{
		return DB::table('sightings')->orderBy('id','desc')->get();
	}
	
	/**
	 * Decrement rank of a sighting
	*/
	public function decrementSightingRank()
	{
		$id = request()->fake;
		$currentRank = DB::table('sightings')->where('id',$id)->pluck('rank')->first();
		if($currentRank > 0)
			DB::table('sightings')->where('id',$id)->decrement('rank', 1);
	}
	
	/**
	 * Increment rank of a sighting
	*/
	public function incrementSightingRank()
	{
		$id = request()->real;
		$currentRank = DB::table('sightings')->where('id',$id)->pluck('rank')->first();
		if($currentRank < 10)
			DB::table('sightings')->where('id',$id)->increment('rank', 1);
	}
}
