<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Enum\CategoryPost;
use App\Models\Commune;
use App\Models\HousingPost;
use Illuminate\Http\Request;

class SearchBarController extends Controller
{

    public function __invoke()
    {
        $search_result = '';

        $commune = Commune::where('libelle', request()->get('search'))->select('id')->first();
        if (request()->get('category_post') == CategoryPost::post_roommate) {

            $search_result = HousingPost::where('commune_id', $commune->id)->with('commune', 'images', 'user')->get();
        } else if (request()->get('category_post') == CategoryPost::post_coloc) {

            $search_result = Commune::where('libelle', request()->get('search'))->with('searchPosts')->get();
        }
        return response()->json([
            "success" => $search_result
        ]);
    }
}
