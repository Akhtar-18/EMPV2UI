<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
  public function register()
  {

    //return view('auth.register');
    $pageConfigs = ['blankPage' => true];

        /*return view('/auth/register', [
        'pageConfigs' => $pageConfigs
        ]); */
        return view('/content/authentication/auth-register-v2', [
            'pageConfigs' => $pageConfigs
            ]);
  }

  public function store(Request $request)
  {
      $request->validate([
        //'name' => 'required|string|between:2,255|regex:/^[a-zA-Z ]+$/',
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
        //'name.required' => 'Name cannot be blank',
        //'name.regex' => 'Name contain alphabets only',
        //'name.between' => 'Name will start from 2 chars and not exceed 255 chars',
        'email.required' => 'Email cannot be blank',
        'email.unique' => 'Email already exists',
        'email.regex' => 'Email is not with @ghrix.com',
        'password.required' => 'Password cannot be blank',
        'password.min' => 'Password must be atleast 8 chars',
        'password.max' => 'Password should not exceed 25 chars',
        //'password.regex' => 'Password should contain 1 uppercase letter, 1 lowercase letter, 1 numeric letter and  1 symbol',
        //'password.confirmed' => 'Password confirmation does not match'
        'password_confirmation.same' => 'Password confirmation does not match'
    ]);

      return redirect('login');
  }

}
