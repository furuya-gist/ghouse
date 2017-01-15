<?php

namespace App\Http\Controllers;

use App\Facility;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create', 'store', 'edit', 'update', 'delete']
        ]);
    }

    //予約情報のリストを表示する
    public function index(){
        $data = Facility::all();

        return view('facility.index',[
            'data' => $data
        ]);
    }


    public function create(){
        return view("facility.create");
    }

    public function store(){
        return redirect("home");
    }

    public function show($id){

    }

    public function edit($msg){
    }

    public function update($id){

        return redirect("/");
    }

    public function destroy($id){

        $target = Facility::find($id);
        $target.delete();

        return redirect()->route('facility.index');
    }
}
