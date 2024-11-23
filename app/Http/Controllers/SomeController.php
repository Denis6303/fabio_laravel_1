<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SomeController extends Controller
{
    public function getdataforselect2(Request $request)
    {
        if ($request->ajax()) {
            $term = trim($request->term);
            // Récupérez seulement 5 canaux
            $posts = DB::table('channels')
                ->select('id', 'name as text')
                ->where('name', 'LIKE', '%' . $term . '%')
                // ->orderBy('name', 'asc')
                ->take(5) // Limite à 5 résultats
                ->get(); // Utiliser get() au lieu de simplePaginate()

            // Pas besoin de pagination ici car on retourne seulement 5 éléments
            $results = [
                "results" => $posts
            ];

            return response()->json($results);
        }
    }
}
