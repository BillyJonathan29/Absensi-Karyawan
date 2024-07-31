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

      try {
          Validations::loginValidate($request);
      
          $credentials = $request->only('name', 'password');
      
          $user = User::where('name', $credentials['name'])->first();
      
          if (!$user || !Hash::check($credentials['password'], $user->password)) {
              return redirect()->back()->withErrors(['auth' => 'Nama pengguna atau kata sandi tidak sesuai. Mohon periksa kembali.']);
          }
      
          Auth::loginUsingId($user->id);
          
          // Redirect ke halaman sesuai peran pengguna setelah login berhasil
          if ($user->role === 'Owner') {
              return redirect()->route('dashboard');
          } else {
              return redirect()->route('homepage');
          }
      
          return Response::success();
      } catch (Exception $e) {
          // Log error di server
          Log::error("Authentication error in file {$e->getFile()} on line {$e->getLine()}: {$e->getMessage()}");
      
          // Pesan server error
          return Response::error("Terjadi kesalahan pada sistem. Silakan coba lagi nanti.", 500);
      }

  
  }

  public function logout(Request $request)
  {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('signin');
  }


//     Validations::loginValidate($request);

//     // dd($request);

//     $credentials = $request->only('name', 'password');

//     $user = User::where('name', $credentials['name'])->first();

//     if(Hash::check($credentials['password'], $user->password)){
//       Auth::loginUsingId($user->id);

//       return Response::success();
//     } else{
//       return Response::error('Nama Atau Password Salah');
//     }

//   }
// }


} 