<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Veterinary;

class VeterinaryController extends Controller
{
    public function register(Request $request){
        $info = $request->post();
        $newVeterinary = new Veterinary();
        $newVeterinary->name = $info['name'];
        $newVeterinary->email = $info['email'];
        $newVeterinary->phone = $info['phone'];
        $newVeterinary->direction = $info['direction'];
        $newVeterinary->description = $info['description'];
        $newVeterinary->password = bcrypt($info['password']);
        $newVeterinary->save();

        return redirect()->route('registerVt');
        
    
    }

    public function loginVeterinary(){
        return view('auth.veterinaryLogin');
    }

    public function authVeterinary(Request $request)
    {
        $info = $request->post();
        
        
        $credentials = $request->validate([
            
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       $user = \App\Models\Veterinary::query()->where('email',$credentials['email'])->first();
       
        if (Auth::login($user)) {
           

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
