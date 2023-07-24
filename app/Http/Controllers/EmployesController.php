<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return view('employes.index')->with([
            'employes'=>$employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'registration_number' => 'required|numeric',
        'fullname' => 'required',
        'depart' =>'required',
        'hire_date' => 'required',
        'phone'=> 'required',
        'address' =>'required',
        'city'=> 'required',
        ]);
        Employe::create($request->except('_token'));
        return redirect()->route('employes.index')->with([
            'success'=>'Employé ajoutée avec succès!'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employes = Employe::where('registration_number',$id)->first();
        return view('employes.show')->with([
            'employe' => $employes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employes = Employe::where('registration_number',$id)->first();
        return view('employes.edit')->with([
            'employe' => $employes
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe = Employe::where('registration_number',$id)->first();
        $this->validate($request,[
            'registration_number' => 'required|numeric|unique:employes,id,' .$employe->registration_number ,
            'fullname' => 'required',
            'depart' =>'required',
            'hire_date' => 'required',
            'phone'=> 'required',
            'address' =>'required',
            'city'=> 'required',
            ]);
            $employe->update($request->except('_token','_method'));
            return redirect()->route('employes.index')->with([
                'success'=>'Employé Modifier avec succès!'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe = Employe::where('registration_number',$id)->first();
        $employe->delete();
        return redirect()->route('employes.index')->with([
            'success'=>'Employé Supprimer avec succès!'
        ]);
    }

    public function vacationRequest($id){
        $employe = Employe::where('registration_number',$id)->first();
        return view('employes.vacation-request')->with([
            "employe" =>  $employe
        ]);
    }
    public function certificateRequest(){
        $employe = Employe::where('registration_number')->first();
        return view('employes.certificate-request')->with([
            "employe" =>  $employe
        ]);
    }
}
