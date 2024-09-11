@extends('parts.layout')
@section('title','Изменить')
@section('content')
<div class="mt-3">
    <div class="mt-3">
        <form action="{{ route('project.update',$project->id, $project->name,$project->customer_id,$project->start_date ) }}"
        autocomplete="off"
        method="post">
        @csrf
            <div class="form-group">
                <label for="name">Наименование проекта</label>
                <input type="name"
                       name="name"
                       id="name"
                       class="form-control"
                       value="{{ $project->name }}"
                       required>
            </div>
            <div class="form-goup">
                <label for="client">Ф.И.О. разработчика</label>
                <input type="client"
                       id="client"
                       name='client'
                       class="form-control"
                       value="{{ $project->client }}"
                       required>
            </div>
            <div class="form-goup">
                <label for="customer">Заказчик</label>
                <input type="customer"
                       id="customer"
                       name='customer'
                       class="form-control"
                       value="{{ $project->customer }}"
                       required>
            </div>
            {{-- <div class="form-goup">
                <label for="start_date">start_date</label>
                <input type="datetime-local"
                       id="start_date"
                       name="start_date"
                       value="{{ $project->start_date }}" --}}
                       {{-- value="{{ old('start_date') }}" --}}
                       {{-- value="{{ now()->format('Y-m-d H:i:s') }}" --}}
                       {{-- class="form-control"
                       required> --}}
            </div>
            <br>
        <button class="btn btn-primary" type="submit">Изменить</button>
        <a href="{{ route('project.index') }}" class="btn btn-danger">Назад</a>

    </form>

</div>
@endsection
