<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MascotaController extends Controller{


     /**
     * @return mixed
     */
    public function list() {
        $Mascotas = Mascota::all();
        return view('mascotas.list', compact('Mascotas'));
    }
    public function create() {
        return view('mascotas.create');
    }
    public function update(Mascota $mascota) {
        return view('mascotas.update', compact('mascota'));
    }
    public function save(Request $request, Mascota $mascota) {
        $post = $request->post(); // Capturamos los datos enviados por post
        $post = array_filter($post); // Eliminamos los datos vacíos o nulos
        $mascota->fill($post); // Asignamos los datos eviados por POST al modelo de usuario
        
        if ($mascota->save()) { // Validamos si el proceso de guardado o actualización se completa
            return redirect()->route('mascota-list'); // redirigimos el usuario a la vista de la lista
        }
        return redirect()->back(); // Redirigimos al usuario a la vista anterior ya sea update o create.
        }

    public function delete(Mascota $mascota) {
        $mascota->delete();
        return redirect()->back();
    
    }
}
