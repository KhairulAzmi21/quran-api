<?php

// use App\Surah;

// $app->get('/', function () use ($app) {
//     $surah = Surah::find(1);
//     $quran = App\Quran::whereSurahId(1)->get();
//     return response()->json([
//         'Surah'   => $surah,
//         'Content' => $quran,
//     ]);
// });

$app->get('/surah/{id}', 'SurahController@show');

$app->get('/find/{surah}/{aya}', 'FindController@show');
