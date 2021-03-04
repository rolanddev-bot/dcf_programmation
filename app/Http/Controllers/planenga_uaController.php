<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planenga_ua;
use App\Repositories\Repository;
use \Validator;

class planenga_uaController extends Controller
{
    
    protected $model;

    public function __construct(Planenga_ua $model){
        $this->model = $model;
    }

    public function index()
    {
        $list_planenga_ua = Planenga_ua::all();
        return response()->json($list_planenga_ua ,200);
    }

    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        
        $create_planenga_ua = Planenga_ua::create([
              'section_id'=>$request->section_id,
              'programme_id'=>$request->programme_id,
              'action_id'=>$request->action_id,
              'unite_administrative_id'=>$request->unite_administrative_id,
              'grande_nature_id'=>$request->grande_nature_id,
              'activite_id'=>$request->activite_id,
              'plan_budgetaire_id'=>$request->plan_budgetaire_id,
              'type_marche_id'=>$request->type_marche_id,
              'code_marche'=>$request->code_marche,
              'montant_prevision'=>$request->montant_prevision,
              'duree_total_prevision'=>$request->duree_total_prevision,
              'ae_programmation'=>$request->ae_programmation,
              'cp_programmation'=>$request->cp_programmation,
              'dont_depense_obliga'=>$request->dont_depense_obliga,
              'procedure_execution'=>$request->procedure_execution,
              'service_prevu'=>$request->service_prevu,
              'duree_realisation_prevu'=>$request->duree_realisation_prevu,
              'taux_exe_cible'=>$request->taux_exe_cible,
              'beneficiare_direct_prevu'=>$request->beneficiare_direct_prevu,
              'localisation_service_prevu'=>$request->localisation_service_prevu,
              'date_debut_traveaux'=>$request->date_debut_traveaux,
              'annee'=>$request->annee,
        ]);

        if($create_planenga_ua){
            return respinse()->json($create_planenga_ua, 200);
        }else{
            return response()->json('un probleme est survenu');
        }
    }

    
    public function show($id)
    {
        $list_planby_id = Planenga_ua::where('id',$id)->first();

        if($list_planby_id){
            return response()->json($list_planby_id,200);
        }else{
            return response()->json('Identifiant introuvable');
        }
    }

   
    public function edit($id)
    {
        $edit_planenga = Planenga_ua::find($id);
       
        return response()->json($edit_planenga, 200);
    }

    
    public function update(Request $request, $id)
    {
        $update_plan_enga = Planenga_ua::where('id',$id)->update([
            'section_id'=>$request->section_id,
            'programme_id'=>$request->programme_id,
            'action_id'=>$request->action_id,
            'unite_administrative_id'=>$request->unite_administrative_id,
            'grande_nature_id'=>$request->grande_nature_id,
            'activite_id'=>$request->activite_id,
            'plan_budgetaire_id'=>$request->plan_budgetaire_id,
            'type_marche_id'=>$request->type_marche_id,
            'code_marche'=>$request->code_marche,
            'montant_prevision'=>$request->montant_prevision,
            'duree_total_prevision'=>$request->duree_total_prevision,
            'ae_programmation'=>$request->ae_programmation,
            'cp_programmation'=>$request->cp_programmation,
            'dont_depense_obliga'=>$request->dont_depense_obliga,
            'procedure_execution'=>$request->procedure_execution,
            'service_prevu'=>$request->service_prevu,
            'duree_realisation_prevu'=>$request->duree_realisation_prevu,
            'taux_exe_cible'=>$request->taux_exe_cible,
            'beneficiare_direct_prevu'=>$request->beneficiare_direct_prevu,
            'localisation_service_prevu'=>$request->localisation_service_prevu,
            'date_debut_traveaux'=>$request->date_debut_traveaux,
            'annee'=>$request->annee
        ]);

        if($update_plan_enga){
            return response()->json($update_plan_enga, 200);
        }else{
            return response()->json('un probleme est survenu');
        }
    
    }

    
    public function destroy($id)
    {
            $del_plan_anga = Planenga_ua::where('id',$id)->destroy();

            if($del_plan_anga){
                return reponse()->json('supprimé avec succès !',200);
            }else{
                return reponse()->json('Identifiant introuvable');
            }
     }
}
