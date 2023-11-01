<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchControll extends Controller
{
    public function search(){

      $search =  DB::table('posts')->where('post_title','LIKE','%'.$_GET['search'].'%')->orWhere('description','LIKE','%'.$_GET['search'].'%')->get();
        return view('search',[
            'search'=> $search,
        ]);
    }
}




