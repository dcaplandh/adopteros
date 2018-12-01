<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adopter;
use App\Dog;
use App\DogAdopter;

class AdopterController extends Controller
{
    public function new()
    {
        return view('newAdopter');
    }

    public function create(){
        
        $this->validate(request(),[
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|integer',
            'telefono' => 'required',
            'direccion' => 'required'
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'dni.required' => 'El DNI es obligatorio',
            'telefono.required' => 'El teléfono es obligatorio',
            'direccion.required' => 'La dirección es obligatoria',
        ]);
        Adopter::create(Request()->all());
        return redirect('/');
    }

    public function all()
    {
        $adopters = Adopter::join('dog_adopter', 'adopters.id', '=', 'dog_adopter.adopter_id')
            ->join('dogs', 'dogs.id', '=', 'dog_adopter.dog_id')
            ->get();
        return view('allAdopters',['adopters' => $adopters]);
    }

    public function find($id)
    {
        $adopters = Adopter::find($id);
        return view('adopter',['adopter' => $adopters]);
    }

    public function get($id)
    {
        $adopters = Adopter::find($id);
        return view('editAdopter',['adopter' => $adopters]);
    }

    public function update($id){
        
        $this->validate(request(),[
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|integer',
            'telefono' => 'required',
            'direccion' => 'required'
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'dni.required' => 'El DNI es obligatorio',
            'telefono.required' => 'El teléfono es obligatorio',
            'direccion.required' => 'La dirección es obligatoria',
        ]);
        $adopter = Adopter::find($id);
        $adopter->nombre = request()->input('nombre');
        $adopter->apellido = request()->input('apellido');
        $adopter->dni = request()->input('dni');
        $adopter->direccion = request()->input('direccion');
        $adopter->telefono = request()->input('telefono');
        $adopter->datos = request()->input('datos');
        $adopter->save();
        return redirect('/allAdopters');
    }

    public function delete($id)
    {
        $adopters = Adopter::find($id)->delete();
        return redirect('/');
    }
}
