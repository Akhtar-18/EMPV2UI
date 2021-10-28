<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;
use App\Notifications\NewUser;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data,
        /*[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ] */
        [
            'name' => 'required|string|between:2,255|regex:/^[a-zA-Z ]+$/',
             'email' => 'required|string|email|max:255|unique:users|regex:/(.*)@ghrix\.com/i',
             //'password' => 'required|string|confirmed|min:8|max:50|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
             'password' => ['required', 'string', 'max:25', Password::min(8)
             ->mixedCase()
             ->letters()
             ->numbers()
             ->symbols()],
             'password_confirmation' => ['required', 'string', 'max:25', 'same:password', Password::min(8)
             ->mixedCase()
             ->letters()
             ->numbers()
             ->symbols()],
         ],
         [
             'name.required' => 'Name cannot be blank',
             'name.regex' => 'Name contain alphabets only',
             'name.between' => 'Name will start from 2 chars and not exceed 255 chars',
             'email.required' => 'Email cannot be blank',
             'email.unique' => 'Email already exists',
             'email.regex' => 'Email is not with @ghrix.com',
             'password.required' => 'Password cannot be blank',
             'password.min' => 'Password must be atleast 8 chars',
             'password.max' => 'Password should not exceed 25 chars',
             //'password.regex' => 'Password should contain 1 uppercase letter, 1 lowercase letter, 1 numeric letter and  1 symbol',
             //'password.confirmed' => 'Password confirmation does not match'
             'password_confirmation.same' => 'Password confirmation does not match'
         ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $admin = User::where('role','admin')->first();
        if ($admin) {
        $admin->notify(new NewUser($user));
        }

    }

    // Register
    public function showRegistrationForm()
    {
        $pageConfigs = ['blankPage' => true];

        /*return view('/auth/register', [
        'pageConfigs' => $pageConfigs
        ]); */
        return view('/content/authentication/auth-register-v2', [
            'pageConfigs' => $pageConfigs
            ]);
    }
}
