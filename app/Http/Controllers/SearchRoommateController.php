<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SearchRoommateRequest;
use App\Models\HousingPost;
use App\Models\Image;

class SearchRoommateController extends Controller
{
    public function index()
    {
        return view('posts.search-roommate');
    }

    public function creatingSearchRoommate(SearchRoommateRequest $request)
    {
       
        try {
            DB::beginTransaction();
            $post = HousingPost::create([
                'rent' => $request->validated('rent'),
                'is_furnished' => $request->validated('is_furnished'),
                "description_post" => $request->validated('description'),
                'roommate_gender' => $request->validated('roommate_gender'),
                'security_deposit' => $request->validated('security_deposit'),
                'commune_id' => $request->validated('commune'),
                'housing_type_id' => $request->validated('housing_type'),
                'user_id' => auth()->user()->id
            ]);

            $imageUrl = $request->validated('image')->store('searchRoommate', 'roommate');
         
            Image::create([
                'imageUrl' => $imageUrl,
                'housing_post_id' => $post->id
            ]);

            DB::commit();

            return redirect()->route('accueil')->with(['success' => 'Votre poste à bien été crée']);

        } catch (\Throwable $error) {

            DB::rollback();

            return response()->json([
                'error' => $error,

            ]);
        }
    }
}
