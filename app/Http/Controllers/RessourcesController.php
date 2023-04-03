<?php

namespace App\Http\Controllers;
use App\Models\Ressource;
use Illuminate\Http\Request;

class RessourcesController extends Controller
{
    public function index()
    {
        $ressources = Ressource::all();
      return view ('ressources.index')->with('ressources', $ressources);
    }

    public function create()
    {
        return view('ressources.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Ressource::create($input);
        return redirect('ressource')->with('flash_message', 'PRoduit ajouté !');  
    }

    public function show($id)
    {
        $ressources = Ressource::find($id);
        return view('ressources.show')->with('ressources', $ressources);
    }

    public function edit($id)
    {
        $ressources = Ressource::find($id);
        return view('ressources.edit')->with('ressources', $ressources);
    }

    public function update(Request $request, $id)
    {
        $ressources = Ressource::find($id);
        $input = $request->all();
        $ressources->update($input);
        return redirect('ressource')->with('flash_message', 'produit modifié!');  
    }

    public function destroy($id)
    {
        Ressource::destroy($id);
        return redirect('ressource')->with('flash_message', 'produit supprimer!');  
    }
}
