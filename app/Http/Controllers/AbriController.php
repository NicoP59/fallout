<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abri;
use Illuminate\Support\Facades\Storage;

class AbriController extends Controller
{
    public function AffichageAbri()
    {

        $abris = Abri::all();
        return view('abris/TousLesAbris', ['abris' => $abris]);
    }

    public function AffichageIDAbri($id)
    {

        $idabri = $id;
        $abris = Abri::where('idabri', '=', $idabri)->get();
        return view('abris.Abri')->with('abris', $abris);
    }

    public function AffichageFormCreate()
    {
        return view('abris/FormAbri');
    }

    public function AffichageFormUpdate($id)
    {

        $idabri = $id;
        $abris = Abri::where('idabri', '=', $idabri)->get();
        return view('abris.FormUpdateAbri')->with('abris', $abris);
    }


    //crud

    public function create(Request $request)
    {

        $request->validate([
            'abri' => ["required"],
            'location' => ["required"],
            'maxplace' => ["required"],
            'resume' => ["required"],
            'img1' => ["required", "image", "mimes:jpg,jpeg,png,gif,svg,webp", "max:2048"],
        ]);



        $path = $request->file('img1')->store('abris', 'public');


        $abri = request('abri');
        $location = request('location');
        $maxplace = request('maxplace');
        $resume = request('resume');

        $NewAbri = new Abri;
        $NewAbri->abri = $abri;
        $NewAbri->location = $location;
        $NewAbri->maxplace = $maxplace;
        $NewAbri->resume = $resume;
        $NewAbri->img1 = $path;
        $NewAbri->save();

        return redirect('/abris');
    }

    public function update($id)
    {

        request()->validate([
            'abri' => ["required"],
            'location' => ["required"],
            'maxplace' => ["required"],
            'resume' => ["required"],
        ]);


        $abri = request('abri');
        $location = request('location');
        $maxplace = request('maxplace');
        $resume = request('resume');

        $array_update = ['abri' => $abri, 'location' => $location, 'maxplace' => $maxplace, 'resume' => $resume];

        $UpdateAbri = Abri::where('idabri', $id);

        $UpdateAbri->update($array_update);

        return redirect('/abris');
    }

    public function delete($id)
    {

        $abri = Abri::where('idabri', $id);
        $abri->delete();

        return redirect('/abris');
    }
}
