@extends('layouts.app')

@section('title')
    施設登録
@endsection

@section('content')
    <a class="btn btn-default" href="{{route('home')}}">戻る</a>
    <form action="{{route('reservation.store')}}" method="POST">
        {!! csrf_field() !!}
            {{--<input type="hidden" name="_method" value="put">--}}
            <div class="form-group">
                <label for="title">タイトル</label>
                <input class="form-control" type="text" id="title" name="title">
                <input class="form-check-input" type="checkbox" name="is_hold">一時保存
                <input class="form-check-input" type="checkbox" name="is_temp">雛形にする
            </div>
            <div class="form-group">
                <label for="">予約者</label>
                <input class="form-control" name="rsv_user_nm" type="text">
            </div>
            <div class="form-group">
                <label for="">予約日</label>
                <div class="form-inline">
                    <div>
                        <label for="">開始日</label>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                        <label for="">終了日</label>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="comment">コメント</label>
                <textarea class="form-control" id="comment" name="comment"></textarea>
            </div>

            <a class="btn btn-default" href="{{route('home')}}">戻る</a>
            <button type="submit" class="btn btn-success">登録</button>
    </form>
@endsection