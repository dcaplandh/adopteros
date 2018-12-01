<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccine;

class VaccineController extends Controller
{
    public function new()
    {
        return view('newVaccine');
    }

    public function create(){
        
        $this->validate(request(),[
            'vacuna' => 'required|unique:vaccinations',
            'datos' => 'required'
        ],[
            'vacuna.unique' => 'La vacuna ya existe',
            'vacuna.required' => 'Ingresar una vacuna',
            'datos.required' => 'La descripción es obligatoria'
        ]);
        Vaccine::create(Request()->all());
        return redirect('/');
    }

    public function all()
    {
        $vaccinations = Vaccine::all();
        return view('allVaccinations',['vaccinations' => $vaccinations]);
    }

    public function find($id)
    {
        $vaccinations = Vaccine::find($id);
        return view('vaccine',['vaccine' => $vaccinations]);
    }

    public function get($id)
    {
        $vaccinations = Vaccine::find($id);
        return view('editVaccine',['vaccine' => $vaccinations]);
    }

    public function update($id){
        
        $this->validate(request(),[
            'vacuna' => 'required',
            'datos' => 'required'
        ],[
            'vacuna.required' => 'Ingresar una vacuna',
            'datos.required' => 'La descripción es obligatoria'
        ]);
        $vaccine = Vaccine::find($id);
        $vaccine->vacuna = request()->input('vacuna');
        $vaccine->datos = request()->input('datos');
        $vaccine->save();
        return redirect('/allVaccinations');
    }

    public function delete($id)
    {
        $vaccinations = Vaccine::find($id)->delete();
        return redirect('/allVaccinations');
    }
}
