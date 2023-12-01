<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create(Request $request)
    {
        $card = Card::create($request->all());
        return response()->json(['message' => 'Task criada com sucesso!', 'Task' => $card]);
    }

    public function index()
    {
        $card = Card::all();
        return $card;
    }

    public function destroy($id)
    {
        $card = Card::find($id);
        if (!$card) {
            return response()->json(['message' => 'Task não existe!']);
        }
        $card->delete();
        return response()->json(['message' => 'Task deletada!']);
    }


    // Rotas Blade

    public function indexWeb()
    {
        $card = Card::all();
        return view('home', compact('card'));
    }


    public function createWeb(Request $request)
    {
        $card = Card::create($request->all());
        return view('home');
    }
}
