@extends('parts.layout')
@section('title', 'Проекты')
@section('content')

<div class="mt-3">
    {{-- @foreach ($projects as $project) --}}
    <div class="row">
        <div class="col-6"><h6>Id</h6></div>
        <div class="col-6">{{$project->id}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Наимнование проекта </h6></div>
        <div class="col-6">{{$project->name}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Ф.И.О. Разработчика</h6></div>
        <div class="col-6">{{$project->client}}</div>
    </div>
    <hr>
    {{-- <div class="row">
        <div class="col-6"><h6>start_date</h6></div>
        <div class="col-6">{{$project->start_date}}</div>
    </div> --}}
    {{-- @endforeach --}}
</div>
<br>
<a href="{{ route('project.index') }}" class="btn btn-danger">Назад</a>
@endsection
