<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\DogVaccine;
use App\Vaccine;
use App\DogAdopter;

class DogController extends Controller
{
    public function new()
    {
        return view('newDog');
    }

    public function create(){
        
        $this->validate(request(),[
            'chapita' => 'required|unique:dogs|min:1|max:999999|integer',
            'nombreadopteros' => 'required',
            'extra' => 'required'
        ],[
            'chapita.unique' => 'La chapita ya existe',
            'chapita.required' => 'Ingresar un numero de chapita',
            'chapita.integer' => 'La chapita debe ser un numero',
            'nombreadopteros.required' => 'El nombre es obligatorio',
            'extra.required' => 'Las observaciones son obligatorias'
        ]);
        Dog::create(Request()->all());
        return redirect('/');
    }

    public function all()
    {
        $dogs = Dog::all();
        return view('allDogs',['dogs' => $dogs]);
    }

    public function find($id)
    {
        $dogs = Dog::find($id);
        $vaccines = DogVaccine::where('dog_id',$id)
            ->join('vaccinations', 'vaccinations.id', '=', 'dog_vaccine.vaccine_id')
            ->orderBy('dog_vaccine.proxima_fecha','asc')
            ->get();
        $morevaccines = Vaccine::all();
        $adopter = DogAdopter::where('dog_id',$id)
        ->join('adopters', 'adopters.id', '=', 'dog_adopter.adopter_id')
        ->first();  
        return view('dog',['dog' => $dogs, 
                'vaccines' => $vaccines,
                'morevaccines'=>$morevaccines,
                'adopter'=>$adopter
                ]);
    }

    public function get($id)
    {
        $dogs = Dog::find($id);
        return view('editDog',['dog' => $dogs]);
    }

    public function update($id){
        
        $this->validate(request(),[
            'nombreadopteros' => 'required',
            'extra' => 'required'
        ],[
            'nombreadopteros.required' => 'El nombre es obligatorio',
            'extra.required' => 'Las observaciones son obligatorias'
        ]);
        $dog = Dog::find($id);
        $dog->nombrenuevo = request()->input('nombrenuevo');
        $dog->nombreadopteros = request()->input('nombreadopteros');
        $dog->castrado = request()->input('castrado');
        $dog->extra = request()->input('extra');
        $dog->save();
        return redirect('/dog/'.$id);
    }

    public function delete($id)
    {
        $dogs = Dog::find($id)->delete();
        return redirect('/allDogs');
    }

    public function addVaccine($id)
    {
       
        $this->validate(request(),[
            'vaccine_id' => 'required',
            'ultima_fecha' => 'required',
            'proxima_fecha' => 'required'
        ],[
            'vacuna.required' => 'Elija una vacuna',
            'vacuna.integer' => 'Elija una vacuna de las opciones',
            'ultima_fecha.required' => 'Ingresar una fecha',
            'proxima_fecha.required' => 'Ingresar una fecha próxima'
        ]);
        $nueva = new DogVaccine();
        $nueva->vaccine_id = request()->input('vaccine_id');
        $nueva->ultima_fecha = request()->input('ultima_fecha');
        $nueva->proxima_fecha = request()->input('proxima_fecha');
        $nueva->dog_id = $id;
        
        $nueva->save();
        return redirect('/dog/'.$id);
    }
}
