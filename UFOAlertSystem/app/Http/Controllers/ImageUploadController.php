<?php
namespace App\Http\Controllers;
use App\Http\Controllers\RankController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }

  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $loc = request()->location;
        $des = request()->description;
        $upldTime=date('Y-m-d H:i:s');
        $id = \Auth::user()->id;
  

        request()->image->move(public_path('images'), $imageName);

        DB::insert('insert into sightings (user_id, image, location, description, created_at, rank) values (?, ?, ?, ?, ?, ?)', [$id, $imageName, $loc, $des, $upldTime, 5]);
		RankController::updateUsrRank();
  

        return back()

            ->with('success','You have successfully uploaded your sighting.')

            ->with('image',$imageName);

    }

}