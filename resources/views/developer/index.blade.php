@extends('parts.layout')
@section('title', 'Проекты')
@section('content')
    <div class="mt-3">
            <a href="{{ route('developer.create') }}" class="btn btn-success">Создать</a>
            <table class='table table-striped text-center'>
            <thead>
                <th>№</th>
                <th>№ id</th>
                <th>ФИО разработчика</th>
                <th>Должность</th>
                <th>Электронная почта</th>
                <th>Контактный телефон</th>
                <th>Разрабатываемый проект</th>
                <th>CRUD</th>
            </thead>
                <tbody>
                    @foreach ($developers as $developers)
                        <tr>
                            <td>{{ $developers->id }}</td>
                            <td>{{ $developers->full_name }}</td>
                            <td>{{ $developers->position }}</td>
                            <td>{{ $developers->email }}</td>
                            <td>{{ $developers->contact_phone }}</td>
                            <td>{{ $developers->project_id }}</td>
                            <td>
                                <a href="{{ route('developer.show', $developers->id, $developers->full_name,$developers->position,$developers->email,$developers->project_id ) }}">Посмотреть </a><br>
                                <a href="{{ route('developer.edit', $developers->id, $developers->full_name,$developers->position,$developers->email,$developers->project_id) }}">Изминить </a><br>
                                <a href="{{ route('developer.delete', $developers->id, $developers->full_name,$developers->position,$developers->email,$developers->project_id ) }}">Удалить </a><br>
                                {{-- <a href="{{ route('project.edit', $project->id, $project->name) }}">Изминить</a><br>
                                <a href="{{ route('project.delete', $project->id, $project->name) }}">Удалить</a><br> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

@endsection
