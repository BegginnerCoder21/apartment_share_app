<?php

namespace App\Http\Controllers;

use App\Models\SearchPost;
use Illuminate\Http\Request;

class MainSearchPostController extends Controller
{
    public function allSearchPost()
    {
        $posts = SearchPost::with('user')->get();

        return response()->json([
            'SearchPost' => $posts
        ]);
    }
}
