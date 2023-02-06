<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saints;

class MainController extends Controller
{
    public function home() {

        $saints = Saints::all();
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
}
