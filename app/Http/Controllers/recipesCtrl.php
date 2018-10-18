<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recipesCtrl extends Controller
{
    public function show($id)
    {
        $recipe = DB::select('SELECT * FROM recipe WHERE id = ?', [$id]);

        $comments = DB::select('SELECT username, comment FROM user, comment WHERE user.id = comment.userId AND recipeId = ?', [$id]);

        return view('recipe', 
            ['title' => $recipe[0]->name, 
            'image' => $recipe[0]->image,
            'ingredients' => $recipe[0]->ingredients,
            'description' => $recipe[0]->description,
            'comments' => $comments]);
    }
}
