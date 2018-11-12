<?php
namespace App\Http\Controllers;
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

  

        request()->image->move(public_path('images'), $imageName);

        DB::insert('insert into sightings (image, location, description) values (?, ?, ?)', [$imageName, $loc, $des]);

  

        return back()

            ->with('success','You have successfully uploaded your sighting.')

            ->with('image',$imageName);

    }

}