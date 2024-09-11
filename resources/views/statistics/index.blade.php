@extends('parts.layout')
@section('title', 'Общая Статистика')
@section('content')
    <div class="mt-3">
        <table class='table table-striped text-center'>
            <thead>

                <th>Link</th>
            </thead>
            <tbody>
                @foreach ($developers as $developer)
                    <tr>
                        <td>
                            <a href="{{ route('developer.show', $developer->id) }}">Общая Статистика</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
