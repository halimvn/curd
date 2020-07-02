<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban extends Model
{
     public static function get_jawaban(){
        $answers = DB::table('jawaban')
        ->join('pertanyaan','jawaban.idpertanyaan','=','pertanyaan.idpertanyaan')
        ->select('pertanyaan.judul as judulpertanyaan','jawaban.*')
        ->get();
        return $answers;
    }
    public static function get_jawaban_id($id){
        $answers = DB::table('jawaban')
        ->join('pertanyaan','jawaban.idpertanyaan','=','pertanyaan.idpertanyaan')
        ->where('jawaban.idpertanyaan','=',$id)
        ->select('pertanyaan.judul as judulpertanyaan','jawaban.*')
        
        ->get();
        return $answers;
    }

    public static function savedata($data){

       
        $new_item = DB::table('jawaban')->insert($data);
       

        return $new_item;
    }
}
