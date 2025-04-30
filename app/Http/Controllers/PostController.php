<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class PostController extends Controller
{
    public function signup(UserRequest $req)
    {

        $password = $req->input('password');
        $re_password = $req->input('re_password');
        $country = $req->input('country');
        if (!$country) {
            return redirect()->back()->withErrors(['error' => 'Please select a country'])->withInput();
        }
        if ($password === $re_password) {

            $user = new User();
            $user->name = $req->input('name');
            $user->lastname = $req->input('lastname');
            $user->email = $req->input('email');
            $user->phone = $req->input('phone');
            $user->address = $req->input('address');
            $user->country = $req->input('country');
            $user->city = $req->input('city');
            $user->state = $req->input('state');
            $user->zip = $req->input('zip');
            // $user->password = bcrypt($req->input('password'));
            $user->password = password_hash($req->input("password"), PASSWORD_DEFAULT);
            $user->role = "User";
            $user->status = 'Active';

            $user->save();

            return redirect()->route('login')->with('success', 'Registration successful. Please login.');
        }

        return redirect()->back()->withErrors(['error' => 'Error password'])->withInput();
    }



    public function connexion(Request $req)
    {
        // Validation des entrées
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');
        $user = User::where("email", $req->input("email"))->first();

        if (Auth::attempt($credentials)) {
            if ($user->role === "User") {
                return redirect()->route('dashboard')->with('success', 'You are Connected');
            } elseif ($user->role === "admin") {
                return redirect()->route('admin.dashboard');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid credentials'])->withInput();
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Deconnexion');
    }
}
