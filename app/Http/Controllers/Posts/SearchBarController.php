<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Enum\CategoryPost;
use App\Models\Commune;
use App\Models\HousingPost;
use App\Models\SearchPost;
use Illuminate\Http\Request;

class SearchBarController extends Controller
{

    public function __invoke()
    {
        $search_result = [];

        $commune = Commune::where('libelle', request()->get('search'))->select('id')->first();

        if(isset($commune->id)){
            
            if (request()->get('category_post') == CategoryPost::post_roommate) {
    
                $search_result['housingPost'] = HousingPost::where('commune_id', $commune->id)->with('commune', 'images', 'user')->get();
            } else if (request()->get('category_post') == CategoryPost::post_coloc) {
    
                $search_result['searchPosts'] = $commune->searchPosts()->wherePivot('commune_id', $commune->id)->with('communes', 'user')->get();
            }
        }

        return response()->json($search_result);
    }
}
