<?php

namespace App\Http\Controllers;

use App\Models\SearchPost;
use Illuminate\Http\Request;

class MainSearchPostController extends Controller
{
    public function allSearchPost()
    {
        $posts = SearchPost::inRandomOrder()->with('user', 'communes')->take(3)->get();

        return response()->json([
            'SearchPost' => $posts
        ]);
    }

    public function detailsSearchPost($id)
    {

        $detailsPost = SearchPost::where('id', $id)->with('user', 'communes')->first();

        return view('posts.detailsPost.detailsSearchPost', compact('detailsPost'));
    }
}
