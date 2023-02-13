<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Prospectos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ComentariosController extends Controller
{
    public function agregarComentario(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'comentario' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {

            $comentario = new Comentarios();
            $comentario->id_usuario = Auth::user()->id;
            $comentario->id_delConcepto = $request->id_delConcepto;
            $comentario->comentario = $request->comentario;
            $comentario->concepto = $request->concepto;
            $comentario->save();

            return redirect()->back()->with('success', 'Comentario agregado correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la alta del comentario.');
        } 



        return view('Portal.Prospectos.prospectos', compact('prospectos', 'comentarios', 'countcoments'));
    }

    public function eliminarComentario($id)
    {

        try {

            $comentario = Comentarios::find($id);
            $comentario->delete();
            return redirect()->back()->with('success', 'Comentario eliminado correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la baja del comentario.');
        } 

    }
}
