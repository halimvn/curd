<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use Illuminate\Routing\Redirector;


class JawabanController extends Controller
{
     public function index(){
        $answer = Jawaban::get_jawaban();
        return view('jawaban',compact('answer'));
    }   

    public function getindex($id){
        $answer = Jawaban::get_jawaban_id($id);
       // dd($answer);
        return view('jawaban',compact('answer','id'));
    }

    public function create($id){
        return view('formjawaban',compact('id'));
    }

    public function store(Request $request){

           
            $data = $request->all();
          
           // $id = $data->judul;
           $id = $data["judul"];
           $isi = $data["isi"];
           //dd($id);
            unset($data["_token"]);
            $nilai = array("isi"=>"$isi","idpertanyaan"=>"$id");
            $answers = Jawaban::savedata($nilai);

            if($answers){
                return redirect("jawaban/$id");
            }

    }

}
