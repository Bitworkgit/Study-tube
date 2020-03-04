<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    protected function index(){
        return view('video/index');
    }

    protected function validator($creds){
        return Validator::make($creds, [
            'title' => ['required', 'string', 'max:255'],
            'descript' => ['required'],
            "video" => ['required',"mimes:mp4,mkv,avi,wma,wmv"]
        ]);
    }

    protected function upload(Request $request){
        if ($request->hasFile('video')) {
            $creds = $request->only(["title","descript","video"]);
            $validator = $this->validator($creds);
            if($validator->fails()){
                return redirect()->route('video.index')
                ->withErrors($validator)
                ->withInput();
            } else {
                $path = $request->file('video')->store('public/videos');
                $id = Auth::user()->id;
                $this->save($creds,$id,$path);
                return redirect()->route("painel.index")->with('success', 'Upload concluído com sucesso!');
            }
        }
        else {
            return "Algo deu errado ao armazenar seu video!";
        }
    }

    protected function save($creds,$id,$path){
        return Video::create([
            "user_id" => $id,
            "title" => $creds["title"],
            "descript" => $creds["descript"],
            "path" => $path
        ]);
    }

    protected function play($titulo){
        return view("video/play",compact('titulo'));
    }
}
