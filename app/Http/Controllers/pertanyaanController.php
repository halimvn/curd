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

    public function edit($id){
        $item = Pertanyaan::find_by_id($id);
        return view('edit',compact('item'));
    }

    public function update($id, Request $request){
        $item = Pertanyaan::update_data($id,$request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $item = Pertanyaan::destroy_data($id);
        return redirect('/pertanyaan');
    }
}
