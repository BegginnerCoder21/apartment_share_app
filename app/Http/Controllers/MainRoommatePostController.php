<?php

namespace App\Http\Controllers;

use App\Models\HousingPost;
use Illuminate\Http\Request;

class MainRoommatePostController extends Controller
{
    public function allPostRoommate()
    {
        $posts = HousingPost::inRandomOrder()->with(['user', 'commune', 'images'])->take(3)->get();

        return response()->json([
            'postRoommate' => $posts
        ]);
    }

    public function detailsPostRoommate($id)
    {

        $detailsPost = HousingPost::where('id', $id)->with('user', 'commune', 'images')->first();
        return view('posts.detailsPost.detailsPostRoommate', compact('detailsPost'));
    }
}
