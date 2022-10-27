<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GestionPromotionModel;
use App\Models\Apprenant;

class GestionApprenants extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        return view('apprenants.form');
    }

    public function store(Request $request)
    {
        
        $apprenant = new GestionApprenants;
        $apprenant->firstName = $request->input('firstName');
        $apprenant->lastName = $request->input('lastName');
        $apprenant->email = $request->input('email');

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
