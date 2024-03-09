<?php

namespace App\Http\Controllers;

use App\Models\HousingPost;
use Illuminate\Http\Request;

class MainRoommatePostController extends Controller
{
    public function allPostRoommate()
    {
        $posts = HousingPost::inRandomOrder()->with(['user', 'commune', 'images'])->take(6)->get();

        return response()->json([
            'postRoommate' => $posts
        ]);
    }

    public function detailsPostRoommate($id)
    {

        $detailsPost = HousingPost::where('id', $id)->with('user', 'commune', 'images')->first();

        if (!auth()->user()) {
            $detailsPost->user['login'] = "Connectez-vous svp pour cette information";
            $detailsPost->user['phone_number'] = "Connectez-vous svp pour cette information";
            $detailsPost->user['dateOfBirth'] = "Connectez-vous svp pour cette information";
        }

        return view('posts.detailsPost.detailsPostRoommate', compact('detailsPost'));
    }
}
