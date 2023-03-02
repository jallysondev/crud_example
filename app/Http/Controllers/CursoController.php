<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create() : \Illuminate\Contracts\View\View
    {
        return view('cursos.create'); 
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome_curso'=>'required',
            'valor'=>'required|numeric'
        ]); 
        
        $curso = new Curso([
            'nome' => $request->get('nome_curso'),
            'valor' => $request->get('valor')
        ]);
        $curso->save();
        return redirect('/cursos')->with('success', 'Curso salvo.');
    }

    public function edit($id) : \Illuminate\Contracts\View\View
    {
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome_curso'=>'required',
            'valor'=>'required|numeric'
        ]); 
        $curso = Curso::find($id);
        
        $curso->nome =  $request->get('nome_curso');
        $curso->valor = $request->get('valor');       
        $curso->save();
 
        return redirect('/cursos')->with('success', 'Curso alterado.');
    }

    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return redirect('/cursos')->with('success', 'Curso removido.'); 
    }
}
