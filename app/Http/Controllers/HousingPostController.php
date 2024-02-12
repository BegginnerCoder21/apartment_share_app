<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatingHousingPostRequest;
use App\Models\HousingPost;
use Illuminate\Http\Request;

class HousingPostController extends Controller
{
    public function createHousingPost(CreatingHousingPostRequest $request)
    {
        if (!$request->has('is_furnished')) {

            $request->merge(["is_furnished" => 0]);
        } else {
            $request->merge(["is_furnished" => 1]);
        }

        HousingPost::create(
            [
                ...$request->validated(),
                "is_furnished" => $request->is_furnished
            ]
        );

        return redirect()->route('accueil')->with(["success" => "Le poste a été crée avec succès."]);
    }
}
