<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SearchController extends Controller
{
    protected function index($video_name){
        $url = [];
        $result = DB::select("SELECT * FROM videos WHERE titulo like '%".$video_name."%'");
        if(empty($result)){
            return "Nenhum video correspondente";
        }
        for($a = 0; $a < count($result); $a++){
            $url[$a] = Storage::url($result[$a]->caminho);
        }
        return view("search/index",compact('result','url'));
    }
}