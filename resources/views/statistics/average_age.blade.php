@extends('parts.layout')
@section('title', "Средний возраст сотрудников")
@section('content')

    <h1>Средний возраст сотрудников</h1>
    <p>Средний возраст сотрудников: {{ $averageAge  }} лет</p>


@endsection
