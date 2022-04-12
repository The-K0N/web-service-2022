<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data = blog::all();
        return view('blog/index',compact('data'));
    
    }

    public function create()
    
    {
        
        return view('blog/create');
    }

    public function store(Request $request)
{
	// insert data ke table blog
    blog::create($request->all());
    
	// DB::table('blog')->insert([
	// 	'author' => $request->author,
	// 	'title' => $request->title,
	// 	'body' => $request->body,
	// 	'keyword' => $request->keyword
	// ]);
	// alihkan halaman ke halaman blog
	return redirect('blog');
 
}
}
