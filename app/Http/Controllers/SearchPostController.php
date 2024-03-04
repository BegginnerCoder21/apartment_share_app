<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatingSearchPostRequest;
use App\Models\SearchPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchPostController extends Controller
{

    public function index()
    {
        return view('posts.search-appartment');
    }
    public function creatingSearchPost(CreatingSearchPostRequest $request)
    {

        try {
            DB::beginTransaction();
            $post = SearchPost::create([
                'budget' => $request->validated('budget'),
                "description" => $request->validated('description'),
                'coloc_gender' => $request->validated('coloc_gender'),
                'availability_date' => $request->validated('availability_date'),
                'appartment_type' => $request->validated('appartment_type'),
                'user_id' => auth()->user()->id
            ]);

            foreach($request->validated('communes') as $com){
                $post->communes()->attach($com["value"]);
            }
            DB::commit();

            return response()->json([
                'success' => 'Poste enregistré avec succès'
            ]);
        } catch (\Throwable $error) {

            DB::rollback(); 
            
            return response()->json([
                'error' => $error,

            ]);
        }
    }
}
