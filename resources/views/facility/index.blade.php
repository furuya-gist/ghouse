@extends('layouts.app')

@section('title')
    設備一覧
@endsection
@section('content')
    <div class="row">
        <div class="left--pane">
            <a href="{{ route("home") }}" class="btn btn-default">戻る</a>
            <a href="{{ route("facility.create") }}" class="btn btn-default">新規登録</a>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div>
                    <table class="table table-striped">
                        <thead class="thead-default">
                        <tr>
                            <th>No</th>
                            <th>設備名称</th>
                            <th>画像</th>
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
                                    {{$datum->name}}
                                </td>
                                <td>
                                    {{$datum->image_thumbnail_path}}
                                </td>
                                <td>
                                    <a href="{{ route('facility.edit',[ 'id' => $datum->id] }}">編集</a>
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
