<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenubarPageController extends Controller
{

    // hone page 
    public function ShowHome(): View{
        // latest news query    --center
       $result = DB::table('posts')->get()->sortDesc()->take(29);
        //  recent-news query   --right-side
        $recent = DB::table('posts')->latest('id')->skip(10)->take(6)->get();
        // technology query    --left-side
        $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
        // category sport
        $sport= DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("categories.name","=","sport")->orderBy("posts.id","desc")->limit(6)->get();
         // category politics
         $politics= DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",2)->orderBy("posts.id","desc")->limit(6)->get();
          // category politics
          $war= DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",4)->orderBy("posts.id","desc")->limit(6)->get();
            // category politics
            $enter= DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",5)->orderBy("posts.id","desc")->limit(6)->get();
  
  
             return view("home",[
            "latest_news"=> $result,
            "recent"=> $recent,
            "tech"=> $tech,
            "sport"=> $sport,
            "politics" => $politics,
            "war"=> $war,
            "enter"=> $enter

        ]);
    }



    // sport page method 
    public function sport(){
        //    mean query for sport 
           $sport= DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("categories.name","=","sport")->orderBy("posts.id","desc")->take(20)->get();
             //  recent-news query   --right-side
             $recent = DB::table('posts')->latest()->take(5)->get();
               // technology query    --left-side
               $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
            return  view("sports",[
                'sport' => $sport,
                'recent'=> $recent,
                'tech' => $tech,
            ]);
          }

        // politics page method 
          public function Politics(){
            $politics =  DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",2)->latest('posts.id')->get();
              //  recent-news query   --right-side
              $recent = DB::table('posts')->latest()->take(5)->get();
              // technology query    --left-side
              $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
               return view('Politics',[
                   'politics'=> $politics,
                   'recent'=> $recent,
                   'tech'=> $tech
               ]);
           }


           public function War(){
            $war=  DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",4)->latest('posts.id')->get();
              //  recent-news query   --right-side
              $recent = DB::table('posts')->latest()->take(5)->get();
              // technology query    --left-side
              $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
               return view('farshell.war',[
                   'war'=> $war,
                   'recent'=> $recent,
                   'tech'=> $tech
               ]);
           }

           public function Entertainment(){
            $entertainment=  DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",5)->latest('posts.id')->get();
            //  recent-news query   --right-side
            $recent = DB::table('posts')->latest()->take(5)->get();
            // technology query    --left-side
            $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
             return view('Entertainment',[
                 'entertain'=> $entertainment,
                 'recent'=> $recent,
                 'tech'=> $tech
             ]);
           }

           public function Tech(){
            $technology=  DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",3)->latest('posts.id')->get();
            //  recent-news query   --right-side
            $recent = DB::table('posts')->latest()->take(5)->get();
            // technology query    --left-side
            $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
             return view('tech',[
                 'technology'=> $technology,
                 'recent'=> $recent,
                 'tech'=> $tech
             ]);
           }

           
           public function business(){
            $bussiness=  DB::table("posts")->leftJoin("categories","posts.category","=","categories.id")->where("posts.category","=",6)->latest('posts.id')->get();
            //  recent-news query   --right-side
            $recent = DB::table('posts')->latest()->take(5)->get();
            // technology query    --left-side
            $tech = DB::table('posts')->leftJoin('categories','posts.category','=','categories.id')->where('categories.name','=','technology')->get();
             return view('business',[
                 'business'=> $bussiness,
                 'recent'=> $recent,
                 'tech'=> $tech
             ]);
           }

           public function about(){
            return view('about-us');
           } 

           public function contact(){
            return view('contact-us');
           } 
}
