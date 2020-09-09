<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Judul;
use App\Subjudul;
use DB;

class JudulController extends Controller
{
    public function getJudul(Request $request){

        $simpanJudul = Judul::create([
            'judul_survey' => $request->judul
        ]);

        return redirect('/cobasurvey');
    }

    public function getSubJudul(Request $request){

        $simpanJudul = Subjudul::create([
            'subjudul' => $request->subjudul
        ]);

        return redirect('/cobasurvey');
    }

    public function loadJudul(Request $request){
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('surveytitles')->select('id', 'judul_survey')->where('judul_survey', 'LIKE', '%$cari%')->get();
            return response()->json($data);
        }
    }
}
