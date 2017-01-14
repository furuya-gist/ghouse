<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //予約情報のリストを表示する
    public function index(){

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
