<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Enum\CategoryPost;
use App\Models\Commune;
use Illuminate\Http\Request;

class SearchBarController extends Controller
{

    public function __invoke()
    {   $search_result = '';
        if(request()->get('category_post') == CategoryPost::post_roommate){

            $search_result = Commune::where('libelle', request()->get('search'))->with('housingPost')->get();
        }else if (request()->get('category_post') == CategoryPost::post_coloc){

            $search_result = Commune::where('libelle', request()->get('search'))->with('searchPosts')->get();
        }
        return response()->json([
            "success" => $search_result
        ]);
    }
}
