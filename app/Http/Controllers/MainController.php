<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saints;

class MainController extends Controller
{
    public function home() {
        
        $saints = Saints::orderBy('created_at', 'DESC') -> get();
        $data = [
            'saints' => $saints
        ];

        return view('pages.homepage', $data);
    }

    public function saintShow($id) {

        $saint = Saints::find($id);
        $data = [
            'saint' => $saint
        ];
        return view('pages.idSaint', $data);
    }

    public function saintDetroy($id) {
        $saint = Saints::find($id);
        $saint -> delete();

        return redirect()->route('homepage');
    }

    public function saintAdd() {
        return view('pages.saintAdd');
    }

    public function saintToDB(Request $request) {
        $data = $request-> all();

        $saint = new Saints();
        $saint -> name = $data['name'];
        $saint -> birth_place = $data['birth_place'];
        $saint -> blessing_date = $data['blessing_date'];
        $saint -> blessing_count = $data['blessing_count'];

        $saint->save();

        return redirect()->route('homepage');
    }
}
