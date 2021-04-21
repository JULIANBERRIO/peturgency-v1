<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller {


    /**
     * @return mixed
     */
    public function list() {
        $Users = User::all();
        return view('users.list', compact('Users'));
    }


    public function create() {
        return view('users.create');
    }

    public function update(User $user) {
        $roles = Role::all();

        return view('users.update', compact('user','roles'));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request, User $user) {

        $post = $request->post(); // Capturamos los datos enviados por post
        $post = array_filter($post); // Eliminamos los datos vacíos o nulos
        $user->fill($post); // Asignamos los datos eviados por POST al modelo de usuario
        $user->status = $request->post('status', 0); // Asignamos el estado enviado, se realiza aparte por que el array filter lo toma como vacío
        $user->syncRoles($request->post('roles'));
        $password = $request->post('password', false); // Capturamos la contraseña aparte por que no siempre es enviada, y si se envia la codificamos para ser guardada.
        if ($password) {
            $user->password = Hash::make($password);
        }
        if ($user->save()) { // Valisamos si el proceso de guardado o actualización se completa
            return redirect()->route('user-list'); // redirigimos el usuario a la vista de la lista
        }
        return redirect()->back(); // Redirigimos al usuario a la vista anterior ya sea update o create.
    }

    public function delete(User $user) {
        $user->delete();
        return redirect()->back();
    }
}
