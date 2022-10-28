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
        return view('apprenants.form',compact('id'));
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
        $apprenant = Apprenant::find($id);
        
        return view('apprenants.editFormApprenant',compact('apprenant'));
    }


    public function update(Request $request, $id)
    {
        $updateApprenant = Apprenant::find($id);
        $updateApprenant->firstName = $request->input('newNameApprenant');
        $updateApprenant->save();
        return redirect('promotion'."/".$updateApprenant->idPromotion."/edit");
    }


    public function destroy($id)
    {
        
    }
}
