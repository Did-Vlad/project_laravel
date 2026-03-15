@extends('layouts.app')

@section('title', 'Адмін — Деталі працівника')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title fw-bold">{{ $employee->first_name }} {{ $employee->last_name }} {{ $employee->midl_name }}</h2>
        <hr>
        <p><strong>Email:</strong> {{ $employee->email }}</p>
        <p><strong>Телефон:</strong> {{ $employee->phone }}</p>
        <p><strong>Стать:</strong> {{ $employee->gender }}</p>
        <p><strong>Дата прийому:</strong> {{ $employee->hire_date }}</p>
        <p><strong>Дата звільнення:</strong> {{ $employee->termination_date ?? '—' }}</p>
        <p><strong>Статус:</strong> {{ $employee->status }}</p>
        <p><strong>Посада:</strong> {{ $employee->position->name ?? '—' }}</p>
        <p><strong>Відділ:</strong> {{ $employee->department->name ?? '—' }}</p>
    </div>
</div>

<h4>Задачі</h4>
@if($employee->tasks->isEmpty())
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
        @foreach($employee->tasks as $task)
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

<a href="{{ route('admin.employees.index') }}" class="btn btn-secondary mt-3">← Назад до списку</a>

@endsection