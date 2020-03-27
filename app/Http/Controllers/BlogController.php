<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Blog;
use App\Http\Resources\Blog as BlogResource;
use App\Http\Resources\BlogCollection;

class BlogController extends Controller
{
    /**
     * 
     * 
     */
    public function index()
    {
        $blogs = Blog::all();
        return new BlogCollection($blogs);
    }

    /**
     * 
     * 
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if($blog)
            return (new BlogResource($blog))->additional(['error' => false]);

        return response()->json(['error' => true]);
    }

    /**
     * 
     * 
     * 
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->titulo = $request->titulo;
        $blog->slug = Str::slug($request->titulo);
        $blog->descripcion = $request->descripcion;
        $blog->content = $request->content;
        if($blog->save())
            return (new BlogResource($blog))->additional(['error' => false]);

        return response()->json(['error' => true]);
    }

}
