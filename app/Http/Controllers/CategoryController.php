<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validate;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id_category','DESC')->get();
        return view('admincp.category.index')->with(compact('category'));
    }


    public function create()
    {
        return view('admincp.category.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:200',
            'status' => 'required'
        ], [
            'title.required' => 'Yêu cầu tên danh mục'
        ]);
        
        $category = new Category();
        $category->title = $data['title'];
        $category->category_status = $data['status'];
        $category->save();
        return back()->with('success','Thêm danh mục thành công');

    }


    public function show($id)
    {
        $category = Category::find($id);
       
        return view('admincp.category.show')->with(compact('category'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:200',
            'status' => 'required'
        ], [
            'title.required' => 'Yêu cầu tên danh mục'
        ]);
        
        $category = Category::find($id);
        $category->title = $data['title'];
        $category->category_status = $data['status'];
        $category->save();
        return redirect('category')->with('success','Cập nhật danh mục thành công');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('success','Xoá danh mục thành công');
    }
}
