<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class ResetPasswordController extends Controller { 

  public function getPassword($token) { 

     return view('emails.reset', ['token' => $token]);
  }

  public function updatePassword(Request $request)
  {

  $request->validate([
      'email' => 'required|email|exists:users',
      'password' => 'required|string|min:6|confirmed',
      'password_confirmation' => 'required',

  ]);

  $updatePassword = DB::table('password_resets')
                      ->where(['email' => $request->email, 'token' => $request->token])
                      ->first();

  $spit_token = explode('n' , $request->token);
  $limit_time =  time() - intval($spit_token[0]);
  

  if( $limit_time > 900 ){  
    return redirect('/connexion')
      ->with('message', 'Formulaire dead');
  }


  if(!$updatePassword){
    return back()->withInput()->with('error', 'Invalid token!');
  }

    User::where('email', $request->email)
      ->update(['mdp' => Hash::make($request->password)]);

    DB::table('password_resets')
      ->where(['email'=> $request->email])
      ->delete();

    return redirect('/connexion')
      ->with('message', 'Your password has been changed!');

  }
}