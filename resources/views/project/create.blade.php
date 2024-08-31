@extends('parts.layout')
@section('title', 'Проекты')
@section('content')
    <div class="mt-3">
        <form action="{{ route('project.store') }}"
        autocomplete="off"
        method="post">
        @csrf
            <div class="form-group">
                <label for="name">Наимнование проекта </label>
                <input type="name"
                       placeholder="Введите инициалы сотрудника"
                       name="name"
                       id="name"
                       class="form-control"

                       required>
            </div>
            <div class="form-goup">
                <label for="client">Ф.И.О. разработчика</label>
                <input type="client"
                       placeholder="Введите ник клиента"
                       id="client"
                       name='client'
                       class="form-control"
                       required>
            </div>
            {{-- <div class="form-goup">
                <label for="start_date">start_date</label>
                <input type="datetime-local"
                       id="start_date"
                       name="start_date"
                       class="form-control"
                       value="{{ old('start_date')}}"
                       ></div>--}}
            </div>
            <br>

            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
    <br><a href="{{ route('project.index') }}" class="btn btn-danger">Назад</a>
@endsection
