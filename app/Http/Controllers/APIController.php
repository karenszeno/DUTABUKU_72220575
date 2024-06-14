<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class APIController extends Controller
{

    public function searchmovies(Request $request){
        $cari = $request -> input('q');
        $movies = Movies::where('title','LIKE',"%$cari%")->get();
        if($movies -> isEmpty()){
            return response()->json([
                'success' =>false,
                'data' => 'Data Tidak Ditemukan'
            ],200)->header('Access-Control-Allow-Origin','*');;
        }
        else{
            return response()->json([
                'success' =>true,
                'data' => $movies
            ],200)->header('Access-Control-Allow-Origin','*');
        }
    }


    // public function searchmovies(Request $request){
        
    //     $cari = $request->input('q');
        
    //    $movies = Movies::where('title', 'LIKE', "%$cari%")->get();

    //     if($movies->isEmpty()){
    //         return response()->json([
    //             'sucess' => false,
    //             'data' => 'Data tidak Ditemukan'
    //         ], 200)->header('Access-Control-Allow-Origin','*');
    //     }
    //     else {
    //         return response()->json([
    //             'sucess' => true,
    //             'data' => $movies
    //         ], 200)->header('Access-Control-Allow-Origin','*');
    //     }
    // }
}
