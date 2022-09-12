<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class VerificationEmailController extends Controller
{


    public function envoieMail($iduser, Request $request)
    {

        $user = DB::table('users')->where(['iduser' => $iduser])->first();

        $bytes = random_bytes(35);
        $hex   = bin2hex($bytes);

        $token = time() . 'n' . $hex . 'n' . $user->iduser;

        $request->email = $user->email;
        
        Mail::send('verifyEmail.verifyEmail', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('verification mail Notification');
        });

        return redirect('/connexion')
            ->with('message', 'Check your email box');
    }

    public function envoieMailAfterClickBtnVerif(Request $request)
    {

        $bytes = random_bytes(35);
        $hex   = bin2hex($bytes);

        $token = time() . 'n' . $hex . 'n' . session("iduser");

        $request->email = session("email");

        Mail::send('verifyEmail.verifyEmail', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('verification mail Notification');
        });

        return redirect('/connexion')
            ->with('message', 'Check your email box');
    }

    public function updatemail($token)
    {

        $spit_token = explode('n', $token);
        $limit_time =  time() - intval($spit_token[0]);

        if ($limit_time > 900) {
            return redirect('/connexion')->with('message', 'Formulaire dead');
        }

        $date = date('Y/d/m H:i:s', time());

        User::where('iduser', $spit_token[2])->update(['isVerified' => $date]);

        request()->session()->put(["isVerified" => $date]);

        return redirect('/connexion')
            ->with('message', 'Your mail has been verified!');
    }
}
