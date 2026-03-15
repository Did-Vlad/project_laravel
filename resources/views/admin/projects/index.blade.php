@extends('layouts.app')

@section('title', 'Адмін — Проекти')

@section('content')

<h2>Список проектів</h2>

<table class="table table-bordered table-striped mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Назва</th>
            <th>Опис</th>
            <th>Бюджет</th>
            <th>Початок</th>
            <th>Кінець</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ $project->budget }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date ?? '—' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection