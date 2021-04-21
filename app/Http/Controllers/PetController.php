<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetController extends Controller{


     /**
     * @return mixed
     */
    public function list() {
        $Pets = Pet::all();
        return view('pets.list', compact('Pets'));
    }
    public function create() {
        return view('pets.create');
    }
    public function update(Pet $pet) {
        return view('pets.update', compact('pet'));
    }
    public function save(Request $request, Pet $pet) {
        $post = $request->post(); // Capturamos los datos enviados por post
        $post = array_filter($post); // Eliminamos los datos vacíos o nulos
        $pet->fill($post); // Asignamos los datos eviados por POST al modelo de usuario
        
        if ($pet->save()) { // Validamos si el proceso de guardado o actualización se completa
            return redirect()->route('pet-list'); // redirigimos el usuario a la vista de la lista
        }
        return redirect()->back(); // Redirigimos al usuario a la vista anterior ya sea update o create.
        }

    public function delete(Pet $pet) {
        $pet->delete();
        return redirect()->back();
    
    }
}
