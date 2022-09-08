<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class VerificationEmailController extends Controller
{
    public function getmail($token)
    {
        // Fonction qui va charger la view "emailVeerifForm" dans le dossier verifyEmail
        return view('verifyEmail.emailVerifForm', ['token' => $token]);
    }

    public function updatemail(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users',

        ]);

        $updatemail = DB::table('users')
            ->where(['email' => $request->email, 'remember_token' => $request->token])
            ->first();
      
        $spit_token = explode('n', $request->token);
        $limit_time =  time() - intval($spit_token[0]);

        // dd($limit_time > 900);
        if ($limit_time > 900) {
        //     return redirect('/connexion')
        //         ->with('message', 'Formulaire dead');
         }

        if (!$updatemail) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        User::where('email', $request->email)
            ->update(['isVerified' =>  date('Y/d/m H:i:s', time())]);

            Mail::send('verifyEmail.verifyEmail', ['token' => $request], function($message) use($request){
                $message->to($request->email);
                $message->subject('verification mail Notification');
            });


        return redirect('/connexion')
            ->with('message', 'Your mail has been verified!');
    }
}
