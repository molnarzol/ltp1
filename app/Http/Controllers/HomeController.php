<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UsersUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function myProfil()
    {
        $user = Auth::user();

        return view('frontend.my_profil', ['user' => $user]);
    }

    public function editMyProfil( Request $request )
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = Auth::user();
        $user->userable->first_name = $request['first_name'];
        $user->userable->last_name = $request['last_name'];
        $user->email = $request['email'];
        $resu = $user->save();

        $user_user = UsersUser::find($user->userable->id);
        $user_user->first_name = $request['first_name'];
        $user_user->last_name = $request['last_name'];
        $user_user->save();

        if ( $resu )
        {
            return redirect('my-profil')->with(['success' => 'Profil succesfully updated!']);
        }

        return redirect('my-profil')->with(['error' => 'Profil update error!']);
    }

    public function changePassword( Request $request )
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request['password']);
        $resu = $user->save();

        if ( $resu )
        {
            return redirect('my-profil')->with(['success' => 'Password succesfully updated!']);
        }

        return redirect('my-profil')->with(['error' => 'Password update error!']);
    }

}
