<?php

namespace App\Http\Controllers;

use App\Models\TipoItem;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

use Log;

class TipoItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function tipoItemRequest()
    {
        return view('tipoitem.index');
    }

    public function tipoItemRequestPost(Request $request)
    {
        $input = new TipoItem();
        $input->tipo = $request->tipo;
        
         
        $input->excluido = 0; 

        if (Auth::check()) {
            $input->id_usuario = Auth::id();  
        }

        $input->save();

        Log::info($input);
     
        return response()->json(['success'=>'Atualizado.']);
    }
}
