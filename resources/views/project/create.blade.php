@extends('parts.layout')
@section('title', 'Проекты')
@section('content')
    <div class="mt-3">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert default-danger">{{ $error }}</div>
            @endforeach
        @endif
        <form action="{{ route('project.store') }}" autocomplete="off" method="post">
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
                <label for="client">Команда Разработчиков</label>
                <input type="client"
                       placeholder="Введите команду разработчиков"
                       id="client"
                       name='client'
                       class="form-control"
                       required>
            </div>
            <div class="form-goup">
                <label for="customer">Заказчик</label>
                <input type="customer"
                       placeholder="Введите заказчика"
                       id="customer"
                       name='customer'
                       class="form-control"
                       required>
            </div>
            <br>
            <div class="form-group">
                <label for="is_actual">Актуальнй Проект</label>
                <input type="checkbox"
                       id="is_actual" @checked(old('is_actual'))
                       name="is_actual"
                       value="1">
            </div>
    </div>
    {{-- <div class="form-goup">
                <label for="start_date">start_date</label>
                <input type="datetime-local"
                       id="start_date"
                       name="start_date"
                       class="form-control"
                       value="{{ old('start_date')}}"
                       ></div> --}}
    </div>
    <br>

    <button class="btn btn-primary" type="submit">Сохранить</button>
    <br> <br><a href="{{ route('project.index') }}" class="btn btn-danger">Назад</a>
    </form>

    </div>

@endsection
