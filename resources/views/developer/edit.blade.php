@extends('parts.layout')
@section('title','Изменить')
@section('content')
<div class="mt-3">
    <div class="mt-3">
        <form action="{{ route('developer.update',$developers->id,
        $developers->full_name,$developers->position,$developers->email,
        $developers->contact_phone,$developers->project_id ) }}"
        autocomplete="off"
        method="post">
        @csrf
            <div class="form-group">
                <label for="full_name">ФИО разработчика</label>
                <input type="full_name"
                       name="full_name"
                       id="full_name"
                       class="form-control"
                       value="{{ $developers->full_name }}"
                       required>
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input type="position"
                       name="position"
                       id="position"
                       class="form-control"
                       value="{{ $developers->position }}"
                       required>
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email"
                       name="email"
                       id="email"
                       class="form-control"
                       value="{{ $developers->email }}"
                       required>
            </div>
            <div class="form-group">
                <label for="contact_phone">Контактный телефон</label>
                <input type="contact_phone"
                       placeholder="Введите телефон сотрудника"
                       name="contact_phone"
                       id="contact_phone"
                       class="form-control"
                       value="{{ $developers->contact_phone }}"
                       required>
            </div>
            <div class="form-group">
                <label for="contact_phone">Контактный телефон</label>
                <input type="contact_phone"
                       placeholder="Введите телефон сотрудника"
                       name="contact_phone"
                       id="contact_phone"
                       class="form-control"
                       value="{{ $developers->contact_phone }}"
                       required>
            </div>
            <div class="form-goup">
                <label for="project_id">Разрабатываемый проект</label>
                <input type="project_id"
                       placeholder="Введите Разрабатываемый проект"
                       id="project_id"
                       name='project_id'
                       class="form-control"
                       value="{{ $developers->project_id }}"
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
