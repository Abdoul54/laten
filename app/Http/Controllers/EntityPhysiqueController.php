<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntityPhysique;
use App\Models\EntitySocial;

use Illuminate\Support\Facades\DB;


/**
 * Summary of EntityPhysiqueController
 */
class EntityPhysiqueController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $entites = EntityPhysique::all();
        return view('entite_physique.index', compact('entites'));
    }

    public function create()
    {
        $entites = EntitySocial::select('id_entite_social', 'raison_social')->get();
        return view('entite_physique.create', compact('entites'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_entite_social' => 'required',
            'libelle' => 'required|string',
            'numero_client' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
            'status_ep' => 'required'
        ]);
        EntityPhysique::create($validatedData);
        return redirect()->route('entite_physique.index')->with('success', 'Entite physique ajoutée avec succès.');
    }


    public function show($id)
    {
        $entitePhysique = EntityPhysique::find($id);
        return view('entite_physique.show', compact('entitePhysique'));
    }

    public function edit($id)
    {
        $entites = EntitySocial::select('id_entite_social', 'raison_social')->get();
        $entitePhysique = EntityPhysique::find($id);
        return view('entite_physique.edit', compact(['entitePhysique', 'entites']));
    }


    public function update(Request $request,  $id)
    {
        $entitePhysique = EntityPhysique::find($id);

        $request->validate([
            'id_entite_social' => 'required',
            'libelle' => 'required|string',
            'numero_client' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
            'status_ep' => 'required'
        ]);

        $entitePhysique->update($request->all());
        return redirect()->route('entite_physique.index')->with('success', 'Entite physique mise à jour avec succès.');
    }

    public function destroy($id)
    {
        EntityPhysique::destroy($id);
        return redirect()->route('entite_physique.index')->with('success', 'Entite physique supprimée avec succès.');
    }

    public function showDetails($id)
    {

        $entite_physique = EntityPhysique::find($id);
        $query = "
        SELECT c.numero_contrat, c.statut_contrat, c.version_contrat, c.type_contrat, c.frequence_facturation, c.date_creation, c.date_demarrage,
        a.libelle AS article_libelle, a.montant, a.remise, a.devise, a.date_creation AS article_date_creation,
        ct.nom AS contact_nom, ct.prenom AS contact_prenom, ct.adresse AS contact_adresse, ct.cin,
        cr.role
        FROM entite_physique ep
        INNER JOIN contrat c ON ep.id_entite_physique = c.id_entite_physique
        INNER JOIN article a ON c.id_contrat = a.id_contrat
        INNER JOIN contactRole cr ON ep.id_entite_physique = cr.id_entite_physique
        INNER JOIN contact ct ON cr.id_contact = ct.id_contact
        WHERE ep.id_entite_physique = ?
        ";

        $details = DB::select($query, [$id]);

        return view('entite_physique.details', compact(['entite_physique', 'details']));
    }
}
