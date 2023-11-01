<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReadmoreController extends Controller
{
    
// readmore page controller 
public function Readmore(){
  
    $read =  DB::table('posts')->select('posts.id','posts.post_title','posts.category','posts.author','posts.description','posts.post_img','posts.created_at','categories.name','users.username')->leftJoin('categories','posts.category','=','categories.id')->leftJoin('users','posts.author','=','users.id')->get()->where('post_title',$_GET['read']);
  
    $letest_news = DB::table('posts')->select('posts.id','posts.post_title','posts.category','posts.author','posts.description','posts.post_img','posts.created_at','categories.name','users.username')->leftJoin('categories','posts.category','=','categories.id')->leftJoin('users','posts.author','=','users.id')->latest('id')->limit(5)->get();


 
    return view('readmore',[
      'readmore'=> $read,
      'latest'=> $letest_news
    ]);
   }
}

