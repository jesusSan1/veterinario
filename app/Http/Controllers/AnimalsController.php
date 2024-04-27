<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index()
    {
        $animals = Animal::simplePaginate(5);
        return view('principal', compact('animals'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
                'name' => 'required',
                'description' => 'required',
            ]);
            Animal::create([
                'titulo' => $request->input('title'),
                'nombre' => $request->input('name'),
                'descripcion' => $request->input('description'),
            ]);
            return redirect()->back()->with('success', 'Datos guardados correctamente');
        }
    }

    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect()->back()->with('success', 'Elemento eliminado');
    }
}