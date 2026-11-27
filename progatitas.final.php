<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function guardarOpinion(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'opinion' => 'required|in:1,2,3',
        ]);

        Opinion::create($validated);

        return back()->with('ok', '¡Gracias por tu opinión!');
    }
}
