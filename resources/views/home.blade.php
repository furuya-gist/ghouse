@extends('layouts.app')

@section('content')
<div class="row">
    <div class="left--pane">
        <a href="{{ route("reservation.index") }}" class="btn btn-default">予約</a>
        <a href="{{ route("facility.index") }}" class="btn btn-default">設備マスタ</a>
    </div>
</div>
@endsection
