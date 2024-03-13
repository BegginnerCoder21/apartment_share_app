<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\Gender;
use App\Models\HousingPost;
use App\Models\HousingType;
use App\Models\SearchPost;
use Illuminate\Http\Request;

class MyPostsController extends Controller
{
    public function index()
    {

        //recupère les deux types de postes du user et les concatènent
        $user = auth()->user();
        $posts_roommate = $user->housingPosts;
        $post_sharing = $user->searchPosts;


        return view('profile.partials.postList', compact('posts_roommate', 'post_sharing'));
    }

    public function editRoommate($id)
    {
        $post = HousingPost::findOrfail($id)->with('commune', 'images')->first();
        $communes = Commune::all();
        $housing_types = HousingType::all();
        $genders = Gender::all();

        return view('posts.edit.editPostRoommate', compact('post', 'communes','housing_types','genders'));
    }

    public function editSharing($id)
    {
        $post = SearchPost::findOrfail($id);

        return view('posts.edit.editPostSharing', compact('post'));
    }

    public function updatedPostRoommate()
    {
    }
}
