<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotxe;

class CotxeController extends Controller
{
    // Mostra el formulari per poder crear un nou cotxe
    public function create(){
        return view('cotxes.create'); // Llama a la vista
    }

    // Guarda un nou cotxe a la base de dades
    public function store(Request $request){
        $request->validate([
            'marca'=>'required',
            'model'=>'required',
            'cilindrada'=>'required|integer',
            'potencia'=>'required|integer'
        ]); // Valida que los datos son correctos

        Cotxe::create($request->all()); // Crea un nuevo coche con los datos del formulario previamente validados

        return redirect()->route('cotxes.index')->with('success', 'El cotxe ha estat afegit correctament'); // Redirige al index (llama a la ruta no a la vista)
    }

    public function index(){
        $cotxes = Cotxe::all(); // Obtenim tots els cotxes de la base de dades
        return view('cotxes.index', compact('cotxes')); // Cridem a la vista index, passant-li els cotxes que hem obtingut
    }
}
