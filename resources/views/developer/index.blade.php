@extends('parts.layout')
@section('title', 'Проекты')
@section('content')
    <div class="mt-3">
            <a href="{{ route('developer.create') }}" class="btn btn-success">Создать</a>
            <table class='table table-striped text-center'>
            <thead>

                <th>№ id</th>
                <th>Ф.И.О. Разработчика</th>
                <th>Должность</th>
                <th>Электронная почта</th>
                <th>Контактный телефон</th>
                <th>Разрабатываемый проект</th>
                <th>CRUD</th>
            </thead>
                <tbody>
                    @foreach ($developers as $developer)
                        <tr>
                            <td>{{ $developer->id }}</td>
                            <td>{{ $developer->full_name }}</td>
                            <td>{{ $developer->position }}</td>
                            <td>{{ $developer->email }}</td>
                            <td>{{ $developer->contact_phone }}</td>
                            <td>{{ $developer->project_id }}</td>
                            <td>
                                <a href="{{ route('developer.show', $developer->id, $developer->full_name,$developer->position,$developer->email,$developer->project_id ) }}">Посмотреть </a><br>
                                <a href="{{ route('developer.edit', $developer->id, $developer->full_name,$developer->position,$developer->email,$developer->project_id) }}">Изминить </a><br>
                                <a href="{{ route('developer.delete', $developer->id, $developer->full_name,$developer->position,$developer->email,$developer->project_id ) }}">Удалить </a><br>
                                {{-- <a href="{{ route('project.edit', $project->id, $project->name) }}">Изминить</a><br>
                                <a href="{{ route('project.delete', $project->id, $project->name) }}">Удалить</a><br> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <a href="{{ route('index') }}" class="btn btn-danger">Назад</a>
@endsection
