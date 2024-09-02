@extends('parts.layout')
@section('title', 'Проекты')
@section('content')
    <div class="mt-3">
            <a href="{{ route('project.create') }}" class="btn btn-success">Создать</a>
            <table class='table table-striped text-center'>
            <thead>
                <th>№</th>
                <th>Наимнование проекта </th>
                <th>Ф.И.О. Разработчика</th>
                <th>CRUD</th>
            </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->client }}</td>

                            <td>
                                <a href="{{ route('project.show', $project->id, $project->name,$project->client ) }}">Посмотреть </a><br>
                                <a href="{{ route('project.edit', $project->id, $project->name,$project->client ) }}">Изминить </a><br>
                                <a href="{{ route('project.delete', $project->id, $project->name,$project->client ) }}">Удалить </a><br>
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
