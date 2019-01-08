<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{

  public function index(){
    $title= 'Welcome to Blog Me !!!' ;
    //return view('pages.index', compact('title'));
    return view('pages.index')->with('title',$title);
}
public function services(){
  $title= 'Services,Justexplore!!!' ;
  return view('pages.service', compact('title'));
}
public function about(){
  $data= array(
    'title'=>"About,Justexplore team",
    'service'=>['wedding','functions','professsional']

  );
  return view('pages.about')->with($data);
}
}
