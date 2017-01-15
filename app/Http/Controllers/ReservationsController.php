<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create', 'store', 'edit', 'update', 'delete']
        ]);
    }

    //予約情報のリストを表示する
    public function index(){
        $data = Reservation::all();

        return view('reservation.index',[
            'data' => $data
        ]);
    }

    public function create(){
        return view("reservation.create");
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => [ 'string' , 'max:255'],
            'comment' => [ 'string', 'max:500'],
        ]);

        $data = new Reservation;
        $data->rsv_user_nm = $request->get('rsv_user_nm','noname');
        $data->title = $request->get('title','notitle');
        $data->rsv_start = $request->get('rsv_start');
        $data->rsv_end = $request->get('rsv_end');
        $data->is_hold = $request->get('is_hold',0);
        $data->is_template = $request->get('is_template',0);
        $data->comment = $request->get('comment');

        $data->rsv_user_id = 1;
        $data->created_id = 1;
        $data->modified_id = 1;
        $data->save();

        return redirect()->route('reservation.index');
    }

    public function show($id){
        $target = Reservation::find($id);
        return view("reservation.show",['target' => $target]);
    }

    public function edit($id){
        $target = Reservation::find($id);
        return view("reservation.edit",['target' => $target]);
    }

    public function update($request,$id){

        $this->validate($request, [
            'title' => [ 'string' , 'max:255'],
            'comment' => [ 'string', 'max:500'],
        ]);

        $data = new Reservation;
        $data->rsv_user_nm = $request->get('rsv_user_nm','noname');
        $data->title = $request->get('title','notitle');
        $data->rsv_start = $request->get('rsv_start');
        $data->rsv_end = $request->get('rsv_end');
        $data->is_hold = $request->get('is_hold',0);
        $data->is_template = $request->get('is_template',0);
        $data->comment = $request->get('comment');

        $data->rsv_user_id = 1;
        $data->created_id = 1;
        $data->modified_id = 1;
        $data->save();

        return redirect()->route('reservation.index');
    }

    public function destroy($id){

        $target = Reservation::find($id);
        $target->delete();

        return redirect()->route('reservation.index');
    }
}
