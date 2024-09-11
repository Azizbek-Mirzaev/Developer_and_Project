@extends('parts.layout')
@section('title', 'Разработчики')
@section('content')

<div class="mt-3">
    {{-- @foreach ($developers as $developer) --}}
    <div class="row">
        <div class="col-6"><h6>Id</h6></div>
        <div class="col-6">{{$developers->id}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Ф.И.О. Разработчика</h6></div>
        <div class="col-6">{{$developers->full_name}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Должность</h6></div>
        <div class="col-6">{{$developers->position}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Электронная почта</h6></div>
        <div class="col-6">{{$developers->email}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Контактный телефон</h6></div>
        <div class="col-6">{{$developers->contact_phone}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Разрабатываемый проект</h6></div>
        <div class="col-6">{{$developers->project->name}}</div>
    </div>
    <hr>
    {{-- <div class="row">
        <div class="col-6"><h6>start_date</h6></div>
        <div class="col-6">{{$project->start_date}}</div>
    </div> --}}

</div>
<br>
<a href="{{ route('developer.index') }}" class="btn btn-danger">Назад</a>
@endsection
