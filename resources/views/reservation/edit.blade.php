@extends('layouts.app')

@section('title')
    施設登録
@endsection

@section('content')
    <a class="btn btn-default" href="{{route('home')}}">戻る</a>
    <form action="{{route('reservation.update',[ 'id' => $target->id ])}}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="title">タイトル</label>
            <input class="form-control" type="text" id="title" name="title" value="{{ $target->title }}">
            <input class="form-check-input" type="checkbox" name="is_hold" {{ $target->is_hold ? 'checked' : ''  }}>一時保存
            <input class="form-check-input" type="checkbox" name="is_temp" {{ $target->is_template ? 'checked' : '' }}>雛形にする
        </div>
        <div class="form-group">
            <label for="">予約者</label>
            <input class="form-control" name="rsv_user_nm" type="text" value="{{ $target->rsv_user_nm }}">
        </div>
        <div class="form-group">
            <label for="">予約日</label>
            <div class="form-inline">
                <div>
                    <label for="">開始日</label>
                    <input class="form-control" type="date" name="rsv_start" value="{{ date_format(date_create($target->rsv_start),"Y-m-d") }}">
                    <label for="">終了日</label>
                    <input class="form-control" type="date" name="rsv_end" value="{{ date_format(date_create($target->rsv_end),"Y-m-d")}}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="comment">コメント</label>
            <textarea class="form-control" id="comment" name="comment">{{ $target->comment }}</textarea>
        </div>

        <div class="form-group row">
            <div class="col-xs-offset-2 col-xs-10">

                <a class="btn btn-default" href="{{route('home')}}">戻る</a>
                <button type="submit" class="btn btn-success">登録</button>
            </div>
        </div>
    </form>
@endsection