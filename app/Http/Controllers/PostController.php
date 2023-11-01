<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function post(){
        $post = DB::table('posts')->orderByDesc('id')->get();
        return view('admin_panel.post',[
            'post'=> $post,
        ]);
    }

    public function addPost(){
        $category = DB::table('categories')->get();
        return view('admin_panel.add-post',[
            'category'=> $category,
        ]);
    }
    public function AddPosts(request $request){
        // validation 
        $request->validate([
            'title'=> 'required',
            'desc'=> 'required',
            'category' => 'required'
        ]);

        $error = [];
        $file_name = $_FILES['upload-img']['name'];
        $file_size = $_FILES['upload-img']['size'];
        $file_tmp  = $_FILES['upload-img']['tmp_name'];
        $file_type = $_FILES['upload-img']['type'];
        $exp = explode('.',$file_name);
        $file_ext = end($exp);
        $extensions = ['jpg','jpeg','png'];
        
        if (in_array($file_ext , $extensions) === false) {
            $error['extension'] = 'This file Extension is Not Allowed Please Choose Jpg,png,jpeg';
        }
        if ($file_size < 5000) {
            $error['size'] = ' your file size to lower please choose 5kb or greater';
        }
        if (empty($error)) {
            move_uploaded_file( $file_tmp, "upload/".$file_name );
        }else{
            print_r($error);
        }

  if(empty($error)){
        DB::table('posts')->insert([
        'post_title'=> $_POST['title'],
        'description'=> $_POST['desc'],
        'category'=> $_POST['category'],
        'author' => $_SESSION['id'],
        'post_img' => $file_name,
        'created_at' => now(),
        'updated_at'=> now(),
    ]);

    DB::table('categories')->where('id',$_POST['category'])->increment('post');
    return redirect('/post');
   }
  }
    
       



    public function delete(){
        $delete = DB::table('posts')->where([
            'id'=> $_GET['id'],
        ])->delete();

        if($delete){
            return redirect('/post')->with('success','');
        }
    }

    // update get method 
    public function updatePost(){
        $update = DB::table('posts')->select('posts.id','posts.post_title','posts.description','posts.category','posts.author','posts.post_img','categories.name')->leftJoin('categories','posts.category','categories.id')->where('posts.id', $_GET['id'])->get();
         $category = DB::table('categories')->get();
        return view('admin_panel.update-post',[
            'update'=>  $update,
            'category'=> $category
        ]);
    }

    // update-post POST method 

    public function ModifyPost(){
   
        if(isset( $_FILES)){
            $file_name = $_FILES['new-image']['name'];
        }
        if(!$file_name){
            $file_name = $_POST['old-image'];
        }

        $tmp_file = $_FILES['new-image']['tmp_name'];
        move_uploaded_file( $tmp_file, "upload/".$file_name );
   
        $modify = DB::table("posts")->select('posts.id','posts.post_title','posts.description','posts.category','posts.author','posts.post_img','categories.name')->leftJoin('categories','posts.category','categories.id')->where("posts.id", $_POST['id'])->update([
            'post_title'=> $_POST['title'],
            'description'=> $_POST['desc'],
            'category'=> $_POST['category'],
            'post_img'=> $file_name,
            
       
            
        ]);
      

        return redirect('/post');
       

    }



}


