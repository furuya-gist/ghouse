<?php

namespace App\Http\Controllers;

use App\Facility;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    //設備情報の一覧を表示する
    public function index(){
        $data = Facility::all();
        return view("facility.index",
            [ 'data' => $data ]);
    }

    public function create(){
        return view("reservation.create");
    }

    public function store(){
        return redirect("home");
    }

    public function show($msg){

    }

    public function edit($msg){
    }

    public function update($msg){

        return redirect("/");
    }

    public function destroy($msg){
        return redirect("/");
    }
}
