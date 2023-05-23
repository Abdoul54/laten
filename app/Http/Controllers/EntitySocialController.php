<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntitySocial;

/**
 * Summary of EntitySocialController
 */
class EntitySocialController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $entites = EntitySocial::all();
        return view('entite_social.index', compact('entites'));
    }

    public function create()
    {
        return view('entite_social.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'raison_social' => 'required|string',
            'numero_registre' => 'required|integer',
            'patente' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
        ]);

        EntitySocial::create($validatedData);
        return redirect()->route('entite_social.index')->with('success', 'Entite sociale ajoutée avec succès.');
    }


    public function show($id)
    {
        $entiteSocial = EntitySocial::find($id);
        return view('entite_social.show',compact('entiteSocial'));
    }

    public function edit($id)
    {
        $entiteSocial = EntitySocial::find($id);
        return view('entite_social.edit',compact('entiteSocial'));

    }


    public function update(Request $request,  $id)
    {
        $entiteSociale = EntitySocial::find($id);

        $request->validate([
            'raison_social' => 'required',
            'numero_registre' => 'required|integer',
            'patente' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
        ]);

        $entiteSociale->update($request->all());
        return redirect()->route('entite_social.index')->with('success', 'Entite sociale mise à jour avec succès.');
    }

    public function destroy($id)
    {
        EntitySocial::destroy($id);
        return redirect()->route('entite_social.index')->with('success', 'Entite sociale supprimée avec succès.');
    }
}
