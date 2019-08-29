<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Membre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lastName' => ['required', 'alpha'],
            'firstName' => ['required', 'alpha'],
            'phone' => ['required', 'min:10', 'numeric', 'max:11'],
            'town' => ['required', 'string'],
            'country' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'lastName' => 'djoko',//$data['lastName'],
            'firstName' => 'roméo',//$data['firstName'],
            'statut' => true,
            'email' => $data['email'],
            'phone' => $data['phone'],
            'town' => $data['town'],
            'adress' => '2255, rue',
            'postCode' => 'g1v 0a8',
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
