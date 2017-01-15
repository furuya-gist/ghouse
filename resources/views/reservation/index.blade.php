@extends('layouts.app')

@section('title')
    予約
@endsection
@section('content')
    <div class="row">
        <div class="left--pane">
            <a href="{{ route("home") }}" class="btn btn-default">戻る</a>
            <a href="{{ route("reservation.create") }}" class="btn btn-default">新規登録</a>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div>
                    <table class="table table-striped">
                        <thead class="thead-default">
                        <tr>
                            <th>No</th>
                            <th>タイトル</th>
                            <th>コメント</th>
                            <th>登録日</th>
                            <th>登録者</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $idx => $datum)
                            <tr>
                                <td>
                                    <label>{{$idx+1}}</label>
                                </td>
                                <td>
                                    {{$datum->title}}
                                </td>
                                <td>
                                    {{$datum->comment}}
                                </td>
                                <td>
                                    {{$datum->created_at}}
                                </td>
                                <td>
                                    {{$datum->created_id}}
                                </td>
                                <td>
                                    <a href="{{ route('reservation.edit', [ 'id' => $datum->id] ) }}">編集</a>
                                    <a href="{{ route('reservation.show', [ 'id' => $datum->id] ) }}">削除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
