<?php

namespace App\Http\Controllers;

use App\Quran;
use App\Surah;

class FindController extends Controller
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

    public function show($surah_id, $aya)
    {
        $surah = Surah::find($surah_id);
        $quran = Quran::whereSurahId($surah_id)->whereAya($aya)->get();

        return response()->json([
            'surah'   => $surah,
            'content' => $quran,
        ]);
    }

    //
}
