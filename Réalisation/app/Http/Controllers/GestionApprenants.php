<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class GestionApprenants extends Controller
{

    public function index()
    {
     
    }

    public function create($id)
    {
        return view('apprenants.form',['id'=>$id]);
    }

    public function store(Request $request)
    {
        $apprenant = new Apprenant();
        $apprenant->firstName = $request->input('firstName');
        $apprenant->lastName = $request->input('lastName');
        $apprenant->email = $request->input('email');
        $apprenant->idPromotion = $request->input('idPromotion');
        $apprenant->save();
        return redirect('/promotion'."/".$apprenant->idPromotion."/edit");
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
