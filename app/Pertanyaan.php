<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Pertanyaan extends Model
{
    //

    public static function get_pertanyaan(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }
    public static function savedata($data){
        $new_item = DB::table('pertanyaan')->insert($data);

        return $new_item;
    }
   
}
