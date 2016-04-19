<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UsersUser;
use App\UsersAdmin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ( isset($data['userable']) && $data['userable'] === 'admin' )
        {
            // admin user
        }
        else
        {
            return Validator::make($data, [
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if ( isset($data['userable']) && $data['userable'] === 'admin' )
        {
            // admin user
        }
        else
        {
            // simple user
            $user = User::create([
                'role' => 'user',
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            $user_user = UsersUser::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name']
            ]);

            $user_user->user()->save($user);

            $data['verification_code']  = $user->verification_code;
            $data['name']  = $data['first_name'] . ' ' .$data['last_name'];

            Mail::send('emails.welcome', $data, function($message) use ($data)
            {
                $message->subject("Welcome to ltp1");
                $message->to($data['email']);
            });
        }

        return $user;
    }
}
