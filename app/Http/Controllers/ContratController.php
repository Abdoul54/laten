<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;


/**
 * Summary of EntityPhysiqueController
 */
class ContratController extends Controller
{

  public function listDuplicateACContracts()
  {
    $contracts = Contrat::whereHas('versions', function ($query) {
      $query->where('status', 'AC')
        ->groupBy('contrat_id')
        ->havingRaw('COUNT(*) > 1');
    })->get();

    return view('contrats', compact('contrats'));
  }




}
