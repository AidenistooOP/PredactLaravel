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
        $blogPosts = BlogPost::all();

        return view('blog.index', compact('blogPosts'));

        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'read-time' => 'required',
            'image' => 'required',
            'published' => 'required',
            'slug' => 'required|unique:blog_posts,slug',
        ]);
        
        $slug = $request->input('slug');
        
        $blogPost = BlogPost::create(array_merge($request->all(), ['slug' => $slug]));
        // Met behulp van bron: https://laracasts.com/discuss/channels/laravel/how-to-create-url-slugs-in-laravel
        
        return redirect()->route('blog.show', $blogPost->slug)
            ->with('success', 'Blog aangemaakt test');
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blogPost = BlogPost::where('slug', $slug)->first();
    
        if (!$blogPost) {
            return response()->view('errors.custom404', [], 404);
        }
    
        return view('blog.show', [
            'title' => $blogPost->title,
            'published' => $blogPost->published,
            'read_time' => $blogPost->read_time,
            'description' => $blogPost->description,
            'blogPost' => $blogPost,
            'image' => $blogPost->image,
            'slug' => $blogPost->slug,
        ]);
    }
    
    
    
    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);
    
        if (!$blogPost) {
            return response()->view('errors.custom404', [], 404);
        }
        $blogPost->delete();
        return redirect('/blogs')->with('success', 'test Blog verwijderd');
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blogPost = BlogPost::find($id);
    
        if (!$blogPost) {
            return response()->view('errors.custom404', [], 404);
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
            return response()->view('errors.custom404', [], 404);
        }
    
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $blogPost->update($request->all());
    
        return redirect()->route('blog.show', $blogPost->slug)
            ->with('success', 'Blog geupdate!');
    }
    
}
