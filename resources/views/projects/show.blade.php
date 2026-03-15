@extends('layouts.app')

@section('title', $project->name)

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title fw-bold">{{ $project->name }}</h2>
        <p class="card-text text-muted">{{ $project->description }}</p>
        <p><strong>Бюджет:</strong> {{ $project->budget }}</p>
        <p><strong>Дата початку:</strong> {{ $project->start_date }}</p>
        <p><strong>Дата кінця:</strong> {{ $project->end_date ?? '—' }}</p>
    </div>
</div>

<h4>Задачі</h4>
@if($project->tasks->isEmpty())
    <p>Немає задач</p>
@else
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Назва</th>
            <th>Опис</th>
            <th>Початок</th>
            <th>Кінець</th>
            <th>Статус</th>
        </tr>
    </thead>
    <tbody>
        @foreach($project->tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->start_date }}</td>
            <td>{{ $task->end_date ?? '—' }}</td>
            <td>{{ $task->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<a href="/projects" class="btn btn-secondary mt-3">← Назад до списку</a>

@endsection