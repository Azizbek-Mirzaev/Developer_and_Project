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
            <div class="form-group">
                <label for="birthdate">Сколько вам лет</label>
                <input type="birthdate"
                       placeholder="Введите Сколько вам лет"
                       name="birthdate"
                       id="birthdate"
                       class="form-control"
                       required>
            </div>
            <div class="form-goup">
                <label for="project_id">Разрабатываемый проект</label>
                       <select class="custom-select"
                        name="project_id"
                        id="project_id">
                        @foreach($projects as $project)
                        <option value="{{  $project->id }}">{{  $project->name }}</option>
                        @endforeach
                       </select>
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
        <div class="mt-3">
            <div class="mt-3">
                {{-- <form action="{{ route('developer.transfer', $developer) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')

                    <label for="project_id">Новый проект:</label>
                    <select name="project_id"
                            id="project_id" required>
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}"
                                {{ $developer->project_id == $project->id ? 'selected' : '' }}>
                                {{ $project->name }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit">Перевести</button> --}}
                </form>

        </div>
    </div>
    <br><a href="{{ route('developer.index') }}" class="btn btn-danger">Назад</a>
@endsection
