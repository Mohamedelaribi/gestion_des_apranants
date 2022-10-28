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
<<<<<<< HEAD
        
        return view('apprenants.editFormApprenant',compact('apprenant'));
=======
        return view('apprenants.formEdit',compact('apprenant'));
>>>>>>> 536e1e210950a55d21512a0436942cb33d75e3ff
    }


    public function update(Request $request, $id)
    {
        $updateApprenant = Apprenant::find($id);
<<<<<<< HEAD
        $updateApprenant->firstName = $request->input('newNameApprenant');
        $updateApprenant->save();
        return redirect('promotion'."/".$updateApprenant->idPromotion."/edit");
=======
        $updateApprenant->firstName = $request->input('newFirstName');
        $updateApprenant->lastName = $request->input('newLastName');
        $updateApprenant->email = $request->input('newEmail');
        $apprenant->save();
        return redirect('apprenants.form');
>>>>>>> 536e1e210950a55d21512a0436942cb33d75e3ff
    }


    public function destroy($id)
    {
        
    }
}
