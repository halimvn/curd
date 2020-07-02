<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;



class pertanyaanController extends Controller
{
    //

    public function index(){
        $question = Pertanyaan::get_pertanyaan();
        return view('pertanyaan',compact('question'));
    }

    public function create(){
        return view('form');
    }

    public function store(Request $request){


            $data = $request->all();

            unset($data["_token"]);
            $question = Pertanyaan::savedata($data);

            if($question){
                return view('pertanyaan');
            }

    }
}
