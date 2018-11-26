<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankController extends Controller
{
   /**
     * Updates the user's rank
     *
     * @return void
     */
    public static function updateUsrRank()
    {
        $uid = \Auth::user()->id;
		
		#$query = DB::select('SELECT COUNT(rank),AVG(rank)
		#					 FROM sightings WHERE user_id = ?',
		#					 [$uid]);
		
		$query = DB::table('sightings')->select(DB::raw('COUNT(rank) as cnt, AVG(rank) as average'))
									   ->where('user_id', '=', $uid)->get();
							 
		$count = (int) $query[0]->cnt;
		$avg = (int) $query[0]->average;
		
		$query = DB::table('users')->select('rank')
								   ->where('id', '=', $uid)
								   ->get();
								   
		$rank = (int) $query[0]->rank;
							
		if ($avg >= 5 && $count >= 3 && $count < 5) {
			$rank = 1;
		} elseif ($avg >= 5 && $count >=5) {
			$rank = 2;
		} elseif ($avg < 5 && $count >= 4 && $rank > 0) {
			$rank = $rank -1;
		} elseif ($avg < 2 && $count > 6) {
			$rank = 0;
		}
		
		DB::update('UPDATE users SET rank = :rank WHERE id = :uid',
					['rank' => $rank, 'uid' => $uid]);
    }
}
