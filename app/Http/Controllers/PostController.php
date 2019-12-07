<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;

use Bulkly\Post;
use Bulkly\Group;

class PostController extends Controller
{
   public function index()
   {
   	$posts=Post::paginate(2);
   	$groups = Group::all();
   	return view('pages.posts',compact('posts','groups'));
   }
   public function groupname()
   {
   	return view('pages.groupname');
   }
   
}
