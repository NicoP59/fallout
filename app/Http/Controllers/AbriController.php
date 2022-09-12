<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abri;

class AbriController extends Controller
{
    public function AffichageAbri()
    {

        $abris = Abri::all();
        return view('abris/TousLesAbris', ['abris' => $abris]);
    }

    public function AffichageFormCreate()
    {
        return view('abris/FormAbri');
    }

    public function AffichafeFormUpdate($id)
    {
        $abri = Abri::where('idabri', $id)->first()->getAttributres();

        return view('abris/FormUpdateAbri', compact('abris'));
    }

    //crud

    public function create(Request $request)
    {

        $request->validate([
            'abri' => "required",
            'location' => "required",
            'maxplace' => "required",
            'resume' => "required",
            'img1' => "required",


        ]);
// dd($request);
        $abri = request('abri');
        $location = request('location');
        $maxplace = request('maxplace');
        $resume = request('resume');
        $img1 = request('img1');

        $NewAbri = new Abri;
        $NewAbri->abri = $abri;
        $NewAbri->location = $location;
        $NewAbri->maxplace = $maxplace;
        $NewAbri->resume = $resume;
        $NewAbri->img1 = $img1;
        $NewAbri->save();

        return redirect('abris.ToutLesAbris');
    }

    public function update( $id){

        request()->validate([
            'abri' => "required",
            'location' => "required",
            'maxplace' => "required",
            'resume' => "required",
            'img1' => "required",
        ]);

        $abri = request('abri');
        $location = request('location');
        $maxplace = request('maxplace');
        $resume = request('resume');
        $img1 = request('img1');

        $array_update = ['abri' => $abri, 'location' => $location, 'maxplace' => $maxplace, 'resume' => $resume, 'img1' => $img1];

        $UpdateAbri = Abri::where('idabri', $id);

        $UpdateAbri->update($array_update);

        return redirect('abris/TousLesAbris');
    }
    
    public function delete($id){
            
        $abri = Abri::where('idabri', $id);
        $abri->delete();

        return redirect('abris/TousLesAbris');
        }
}
