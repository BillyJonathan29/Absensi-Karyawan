<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\MyClass\Response;
use App\MyClass\Validations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function signin()
  {
    return view('auth.signin');
  }

  public function authenticate(Request $request)
  {
    Validations::loginValidate($request);

    // dd($request);

    $credentials = $request->only('name', 'password');

    $user = User::where('name', $credentials['name'])->first();

    if(Hash::check($credentials['password'], $user->password)){
      Auth::loginUsingId($user->id);

      return Response::success();
    } else{
      return Response::error('Nama Atau Password Salah');
    }

  }
}
