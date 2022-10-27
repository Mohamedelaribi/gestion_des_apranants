<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GestionPromotionModel;
use App\Models\Apprenant;


class GestionPromotion extends Controller
{
    public function index()
    {
        $data =  GestionPromotionModel ::all();
        return view('index',[
            'data'=> $data
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $Promotion = new GestionPromotionModel();
        $Promotion->namePromotion = $request->input('testName');
        $Promotion->save();
        return redirect()->route('promotion.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        
        $promotion = GestionPromotionModel::find($id);
        $apprenants = Apprenant::
        select(
        'apprenants.firstName',
        'apprenants.lastName',
        'apprenants.email',
        'apprenants.id as idAppronant',
        'gestion_promotion_models.name',
        'gestion_promotion_models.id as idPromotion')
        ->rightJoin('gestion_promotion_models','gestion_promotion_models.idPromotion','=','apprenants.idPromotion')
        ->where('gestion_promotion_models.id','=',$id)->get();
        return view('editForm',compact('promotion'));

        
    }

    public function update(Request $request, $id)
    {   
        $updatePromotion = GestionPromotionModel::find($id);
        $updatePromotion->namePromotion = $request->input('newNamePromotion');
        $updatePromotion->save();
        return redirect()->route('promotion.index');
    }

    public function search($name=null){ 
        if($name == null){
            $data =GestionPromotionModel::all();
            return view('search',compact('data'));        }
        else {
            $data =GestionPromotionModel::where('namePromotion', 'like','%'.$name.'%')->get();
            return view('search',compact('data'));

        }

    }

    public function destroy($id)
    {
    
    }

    // public function selectApprenants($id){

    //     $apprenants = Apprenant::select('apprenants.firstName','lastName','apprenats.id as idApprenants','gestion_promotion_models.id as idPromoion')
    //     ->leftJoin('apprenants','apprenants.idPromotion','=','promotion.idPromotion')
    //     ->where('promotion.id','=',)
    //     return view('index');
    // }
}
