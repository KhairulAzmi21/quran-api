<?php

namespace App\Http\Controllers;

use App\Quran;
use App\Surah;

class SurahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show($id)
    {
        $surah = Surah::find($id);
        $quran = Quran::whereSurahId($id)->get();
        return response()->json([
            'surah'   => $surah,
            'content' => $quran,
        ]);
    }

    //
}
