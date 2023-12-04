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
    try {
        $cards = Card::orderBy('description', 'asc')->get();
        return response()->json($cards);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Erro ao recuperar os cards.'], 500);
    }
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

    public function show(Request $request)
    {
        try {
            $description = $request->input('description');
            $descriptions = Card::where('description', 'ilike', "%$description%")->get();
            return response()->json(['País' => $descriptions]);
        } catch (ValidationException $e) {
            return response()->json(['error' => 'O parâmetro "description" é obrigatório.'], 400);
        }
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
        return redirect('/');
    }

    //Web
    public function destroyWeb($id)
    {
        $tasks = Card::findOrFail($id);
        $tasks->delete();
        return redirect('/');
    }
}
