<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\MenubarPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReadmoreController;
use App\Http\Controllers\SearchControll;
use Illuminate\Support\Facades\Route;
use App\models\user;



session_start();
// pages route 
route::get("/",[MenubarPageController::class,'ShowHome'])->name('home');
route::get('/read',[ReadmoreController::class,'Readmore'])->name('readmore');
route::get('/sport',[MenubarPageController::class,'sport'])->name('sport');
route::get('/politics',[MenubarPageController::class,'politics'])->name('politics');
route::get('/war',[MenubarPageController::class,'War'])->name('war');
route::get('/search',[SearchControll::class,'search'])->name('search');
route::get('/entertainment',[MenubarPageController::class,'Entertainment'])->name('entertain');
route::get('/tech',[MenubarPageController::class,'Tech'])->name('tech');
route::get('/business',[MenubarPageController::class,'business'])->name('business');
route::get('/about',[MenubarPageController::class,'about'])->name('about');
route::get('/contact',[MenubarPageController::class,'contact'])->name('contact');


// admin_panel user table Routes 
route::get('/user',[AdminPanelController::class,'users'])->name('users');

route::get('/add',[AdminPanelController::class,'addUsers'])->name('add-user');
route::post('/add',[AdminPanelController::class,'add']);

route::get('/login',[AdminPanelController::class,'login']);
route::post('/login',[AdminPanelController::class,'loginUser']);

route::get('/update',[AdminPanelController::class,'updateUser'])->name('update-user');
route::post('/update',[AdminPanelController::class,'Update']);

route::get('/deleteUser',[AdminPanelController::class,'deleteUser'])->name('delete-user');

route::get('/logout',[AdminPanelController::class,'logout'])->name('logout');



// admin_panel post table route 
route::get('/post',[PostController::class,'post'])->name('post');

route::get('/addpost',[PostController::class,'addPost'])->name('add-post');
route::post('/addpost',[PostController::class,'AddPosts']);

route::get('/update-post',[PostController::class,'updatePost'])->name('update-post');
route::post('/update-post',[PostController::class,'ModifyPost']);

route::get('/delete',[PostController::class,'delete'])->name('delete-post');



