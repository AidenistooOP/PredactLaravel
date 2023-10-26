<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all blog posts from the 'blog_posts' table
        $blogPosts = BlogPost::all();

        return view('blog.index', compact('blogPosts'));

        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implement this method to show a form for creating a new blog post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implement this method to store a new blog post in the 'blog_posts' table
    }

    /**
     * Display the specified resource.
     */
    public function show($title)
    {
        $slug = Str::slug($title, '-');
    
        $blogPost = BlogPost::where('slug', $slug)->first();
    
        if (!$blogPost) {
            abort(404); 
            header("HTTP/1.0 404 Not Found");
    include("custom-404-page.html");
    exit();
        }
    
        return view('blog.show', [
            'title' => $blogPost->title,
            'published' => $blogPost->published,
            'read_time' => $blogPost->read_time,
            'description' => $blogPost->description,
            'blogPost' => $blogPost,
            'image' => $blogPost->image,
            'slug' => $slug,
        ]);
    }

    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);
    
        if (!$blogPost) {
            abort(404);
        }
        $blogPost->delete();
        return redirect('/blogs')->with('success', 'Blog post deleted successfully');
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blogPost = BlogPost::find($id);
    
        if (!$blogPost) {
            abort(404);
        }
    
        return view('blog.edit', compact('blogPost'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blogPost = BlogPost::find($id);
    
        if (!$blogPost) {
            abort(404);
        }
    
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $blogPost->update($request->all());
    
        return redirect()->route('blog.show', $blogPost->slug)
            ->with('success', 'Blog post updated successfully');
    }
    
}
