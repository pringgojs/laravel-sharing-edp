<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::all();
    }

    public function show($id)
    {
        $view = view();
        $view->blog = Blog::findOrFail($id);
        return $view;
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        
        return redirect('blog');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();

        return redirect('blog');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('blog');
    }
}
