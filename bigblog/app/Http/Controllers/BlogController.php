<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use http\Env\Response;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tasks = Blog::all();
        return view('tasks.list', compact('tasks'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tasks.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $task = new Blog();
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        //upload file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $task->image = $path;
        }
        $task->due_date = $request->input('due_date');
        $task->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('tasks.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $task = Blog::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $task = Blog::findOrFail($id);
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        //cap nhat anh
        if ($request->hasFile('image')) {
            //xoa anh cu neu co
            $currentImg = $task->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            // cap nhat anh moi
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $task->image = $path;
        }
        $task->due_date = $request->input('due_date');
        $task->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('tasks.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $task = Blog::findOrFail($id);
        $image = $task->image;
        //delete image
        if ($image) {
            Storage::delete('/public/' . $image);
        }
        $task->delete();
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành công');
        //xoa xong quay ve trang danh sach task
        return redirect()->route('tasks.index');
    }
}
