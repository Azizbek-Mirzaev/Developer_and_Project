@extends('parts.layout')
@section('title', 'Проекты')
@section('content')
    <div class="mt-3">
        <form action="{{ route('developer.store') }}"
        autocomplete="off"
        method="post">
        @csrf
            <div class="form-group">
                <label for="full_name">ФИО разработчика</label>
                <input type="full_name"
                       placeholder="Введите инициалы сотрудника"
                       name="full_name"
                       id="full_name"
                       class="form-control"
                       required>
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input type="position"
                       placeholder="Введите должность сотрудника"
                       name="position"
                       id="position"
                       class="form-control"
                       required>
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email"
                       placeholder="Введите Электронную почту сотрудника"
                       name="email"
                       id="email"
                       class="form-control"
                       required>
            </div>
            <div class="form-group">
                <label for="contact_phone">Контактный телефон</label>
                <input type="contact_phone"
                       placeholder="Введите телефон сотрудника"
                       name="contact_phone"
                       id="contact_phone"
                       class="form-control"
                       required>
            </div>
            <div class="form-goup">
                <label for="project_id">Разрабатываемый проект</label>
                <input type="project_id"
                       placeholder="Введите Разрабатываемый проект"
                       id="project_id"
                       name='project_id'
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
    <br><a href="{{ route('developer.index') }}" class="btn btn-danger">Назад</a>
@endsection
