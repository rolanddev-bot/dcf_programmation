<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlanEngagement;
use App\Repositories\Repository;
use \Validator;

class PlanEngagementController extends Controller
{
    
    protected $model;

    public function __construct(PlanEngagement $model){
        $this->model = $model;
    }

    public function index()
    {
        $list_plan = PlanEngagement::all();
        return response()->json($list_plan ,200);
    }

    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        
        $create_plan = PlanEngagement::create([
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

        if($create_plan){
            return response()->json($create_plan, 201);
        }else{
            return response()->json('un probleme est survenu',411);
        }
    }

    
    public function show($id)
    {
        $list_plan = PlanEngagement::where('id',$id)->first();

        if($list_plan){
            return response()->json($list_plan,201);
        }else{
            return response()->json('Identifiant introuvable',411);
        }
    }

   
    public function edit($id)
    {
        $edit_plan = PlanEngagement::find($id);
       
        if($sedit_plan){
            return response()->json($edit_plan, 201);
        }else{
            return response()->json('Identifiant introuvable', 411);
        }
        
    }

    
    public function update(Request $request, $id)
    {
        $update_plan = PlanEngagement::where('id',$id)->update([
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

        if($update_plan){
            return response()->json($update_plan, 201);
        }else{
            return response()->json('un probleme est survenu',411);
        }
    
    }

    
    public function destroy($id)
    {
            $delete_plan = PlanEngagement::where('id',$id)->delete();

            if($delete_plan){
                return response()->json('supprimé avec succès !',201);
            }else{
                return response()->json('Identifiant introuvable',411);
            }
     }
}
