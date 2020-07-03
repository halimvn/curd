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

    public static function find_by_id($id){
        $item = DB::table('pertanyaan')->where('idpertanyaan',$id)->first();
        return $item;
    }

    public static function update_data($id, $request){
        $item = DB::table('pertanyaan')
        ->where('idpertanyaan',$id)
        ->update([
            'judul' => $request["judul"],
            'isi' =>$request["isi"],
            'updated_at' => now(),
        ]);
        return $item;
    }

    public static function destroy_data($id){
        $item = DB::table('pertanyaan')->where('idpertanyaan',$id)->delete();
    }
   
}
