@extends('layouts.app')

@section('title')
    予約削除
@endsection

@section('content')
    <a class="btn btn-default" href="{{route('reservation.index')}}">戻る</a>
    <form action="{{route('reservation.destroy',[ 'id' => $target->id ])}}" method="POST">
        {!! csrf_field() !!}

        <input type="hidden" name="_method" value="DELETE">

        <div class="form-group">
            <label for="title">タイトル</label>
            <label>{{$target->title}}</label>
            <input class="form-check-input" type="checkbox" name="is_hold" disabled {{$target->is_hold ? "checked" : ''}}>一時保存
            <input class="form-check-input" type="checkbox" name="is_template" disabled {{$target->is_template ? "checked" : ''}}>雛形にする
        </div>
        <div class="form-group">
            <label for="">予約者</label>
            <label>{{$target->rsv_user_nm}}</label>
        </div>
        <div class="form-group">
            <label for="">予約日</label>
            <div class="form-inline">
                <div>
                    <label for="">開始日</label>
                    <label>{{$target->rsv_start}}</label>
                    <label for="">終了日</label>
                    <label>{{$target->rsv_end}}</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="comment">コメント</label>
            <label>{{$target->comment}}</label>
        </div>

        <div class="form-group row">
            <div class="col-xs-offset-2 col-xs-10">

                <a class="btn btn-default" href="{{route('reservation.index')}}">戻る</a>
                <button type="submit" class="btn btn-danger">削除</button>
            </div>
        </div>
    </form>
@endsection