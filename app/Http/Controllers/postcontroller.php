<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
public function home(){
    return view('addpost');
}
public function allpost(){
    $posts=post::latest()->paginate(3);
    
    return view('allpost',compact('posts'));
}

public function storepost(Request $request){
//validate
$request->validate(
    [
        'title'=>'required',
        'detail'=>'required'
    ],
    [
        'detail.required'=>'Detail plz !! ',
    ]
    );


    //insert
    $newpost=new post();
    $newpost->title=$request->title;
    $newpost->detail=$request->detail;
    $newpost->save();
    return back()->with('success', 'post successfully added');

}
public function edit($id){
    $posts=post::find($id);
    // dd($posts);
    return view('editpost',compact('posts'));

}
public function update(Request $request,$id){
    $request->validate([
        'title'=>'required',
        'detail'=>'required',
    ],
    [
        'title.required'=>'plz enter yourTitle !',
      
        'detail.required'=>'Detail plz !! ',
]
      
);
// $request->all();
// dd($request->all());
$posts=post::find($id);
// dd($posts);
$posts->title=$request->title;
$posts->detail=$request->detail;

$posts->save();
return redirect()->route('allpost')->with('success', 'post successfully update');
}


public function delete($id){
   $posts=post::find($id);
   $posts->delete();
   return redirect()->route('allpost')->with('success', 'post successfully delete');
}

}
