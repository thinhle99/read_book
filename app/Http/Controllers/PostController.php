<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Validate;
use File;
use Storage;
class PostController extends Controller
{

    public function index()
    {
        $post = Post::with('category')->orderBy('id_post','DESC')->get();
        return view('admincp.post.index')->with(compact('post'));
    }


    public function create()
    {
        $category = Category::orderBy('id_category','DESC')->get();
        return view('admincp.post.create')->with(compact('category'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:200',
            'summary' => 'required',
            'content' => 'required',
            'image' => 'required',
            'id_category' => 'required',
            'status' => 'required'
        ], [
            'title.required' => 'Yêu cầu tên danh mục',
            'summary.required' => 'Yêu cầu tóm tắt',
            'content.required' => 'Yêu cầu nội dung',
            'image.required' => 'Yêu cầu hình ảnh bài viết'
        ]);
       
        $post = new Post();
        //them image
        $image = $data['image'];
        $extension = $image->getClientOriginalExtension();
        $name = time().'_'.$image->getClientOriginalName();
        Storage::disk('public')->put($name,File::get($image));

        $post->image_post = $name;
        $post->title_post = $data['title'];
        $post->summary_post = $data['summary'];
        $post->content_post = $data['content'];
        $post->id_category = $data['id_category'];
        $post->status_post = $data['status'];
        $post->save();
        return back()->with('success','Thêm bài viết thành công');
    }


    public function show($id)
    {

        $category = Category::orderBy('id_category','DESC')->get();
        $post = Post::find($id);
        return view('admincp.post.show')->with(compact('post','category'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:200',
            'summary' => 'required',
            'content' => 'required',
            'id_category' => 'required',
            'status' => 'required'
        ], [
            'title.required' => 'Yêu cầu tên danh mục',
            'summary.required' => 'Yêu cầu tóm tắt',
            'content.required' => 'Yêu cầu nội dung'
        ]);
       
        $post = Post::find($id);
        //them image
        if($request->image){
            //xoa anh cu
            if($post->image_post){
                unlink('public/uploads/'.$post->image_post);
            }  
                $image = $request->image;
                $extension = $image->getClientOriginalExtension();
                $name = time().'_'.$image->getClientOriginalName();
                Storage::disk('public')->put($name,File::get($image));
                $post->image_post = $name;
           
            
        }
        $post->title_post = $data['title'];
        $post->summary_post = $data['summary'];
        $post->content_post = $data['content'];
        $post->id_category = $data['id_category'];
        $post->status_post = $data['status'];
        $post->save();
        return redirect('post')->with('success','Cập nhật bài viết thành công');
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->image_post){
            unlink('public/uploads/'.$post->image_post);
        }
        $post->delete();
        return back()->with('success','Xoá bài viết thành công');
    }
}
