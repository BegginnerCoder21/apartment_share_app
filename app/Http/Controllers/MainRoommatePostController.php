<?php

namespace App\Http\Controllers;

use App\Models\HousingPost;
use Illuminate\Http\Request;

class MainRoommatePostController extends Controller
{
    public function allPostRoommate()
    {
        $posts = HousingPost::inRandomOrder()->with(['user','commune','images'])->take(3)->get();

        return response()->json([
            'postRoommate' => $posts
        ]);
    }
}
