<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trangchu(){
        $post = Post::orderBy('id_post','DESC')->paginate(12);
        $category = Category::all();
        return view('pages.home')->with(compact('category','post'));
    }
    public function bai_viet($id){

        $get_post = Post::find($id);
        $category = Category::all();

        $relate = Post::where('id_category',$get_post->id_category)->whereNotIn('id_post',[$id])->paginate(12);
        return view('pages.details')->with(compact('category','get_post','relate'));
    }

    public function tim_kiem(){
        $tukhoa = $_GET['tukhoa'];

        $get_post = Post::where('title_post','LIKE','%'.$tukhoa.'%')->Orwhere('summary_post','LIKE','%'.$tukhoa.'%')->get();
        // $get_post = Post::where('title_post','LIKE','%'.$tukhoa.'%')->Orwhere('summary_post','LIKE','%'.$tukhoa.'%')->get();

        // ->Orwhere('summary_post','LIKE','%'.$tukhoa.'%')->Orwhere('content_post','LIKE','%'.$tukhoa.'%')

        $category = Category::all();
        return view('pages.search')->with(compact('category','get_post','tukhoa'));
    }

    public function show($id)
    {
        $category = Category::all();
        $get_category = Post::with('category')->where('id_category',$id)->paginate(12);
        return view('pages.blogs')->with(compact('get_category','category'));
    }


    public function index()
    {
        // $post = Post::all();
        // return view('pages.blogs')->with(compact('post'));
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }




    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
