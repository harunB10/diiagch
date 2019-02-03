<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdminController extends Controller
{

    public function index(){
        $ads = Ad::all();
    	return view('admin', compact('ads'));
    }

    public function save(Request $request){
    	$this->validate($request, [
    	'filename' => 'required',
    	'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8000'
	]);

    	$items = $request->all();
        
         $ad = new Ad();
         $ad->name = $items["house"];
         $ad->location = $items["location"];
         $ad->area = $items["area"];
         $ad->noOfbedrooms = $items["spavaca"];
         $ad->noOfbathrooms = $items["kupatilo"];

    	if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }



         //$form= new Form();
         $ad->imagePath = json_encode($data);
         
        
        $ad->save();

        return redirect('/allAds');
    }

    public function delete($id){
        Ad::find($id)->delete();

        return redirect('/admin');
    }
}
