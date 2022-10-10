<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category');
        return view('blogs', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('create-blogs', [
            'categories' => $categories
        ]);

    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $blog = new Blog();
            $blog->title = $request->get('title');
            $blog->description = $request->get('description');
            $blog->category_id = $request->get('category_id');
            $url = $request->file('image')->store('images');
            $blog->image = $url;

            $blog->save();

            return redirect('/')->with('status', 'Данные успешно сохранены');
        }
    }

    public function blog(Blog $blog)
    {
        return view('blog', [
            'blog' => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('edit-blog', [
            'blog' => $blog,
            'categories'=>$categories
        ]);
    }
    public function editSave(Blog $blog,Request $request)
    {
        if ($request->hasFile('image')) {
            $blog->title = $request->get('title');
            $blog->description = $request->get('description');
            $blog->category_id = $request->get('category_id');
            $url = $request->file('image')->store('images');
            $blog->image = $url;

            $blog->save();

            return redirect('/')->with('status', 'Данные успешно сохранены');
        }
    }

    public function delete(Blog $blog) {
        $blog ->delete();
        return redirect('/')->with('status','Данные успешно удалены!');
    }
}
