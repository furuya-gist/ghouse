@extends('layouts.app')

@section('title')
    設備一覧
@endsection
@section('content')
    <div class="row">
        <div class="left--pane">
            <a href="{{ route("reservation.create") }}" class="btn btn-default">新規登録</a>
            <a href="{{ route("facility.index") }}" class="btn btn-default">予約情報に戻る</a>
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
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
