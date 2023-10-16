<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

class Blogcontroller extends Controller
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
        $slug = Str::slug($title, '-'); // Create a slug
    
        $blogPost = BlogPost::where('slug', $slug)->first(); // Retrieve by slug
    
        if (!$blogPost) {
            abort(404); // Return a 404 error response when the blog post is not found
        }
    
        return view('blog.show', [
            'title' => $blogPost->title,
            'published' => $blogPost->published,
            'read_time' => $blogPost->read_time,
            'description' => $blogPost->description,
            'blogPost' => $blogPost,
            'image' => $blogPost->image, // Include the image data
            'slug' => $slug, // Pass the slug to the view
        ]);
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Implement this method to show a form for editing an existing blog post
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Implement this method to update an existing blog post in the 'blog_posts' table
    }
}
