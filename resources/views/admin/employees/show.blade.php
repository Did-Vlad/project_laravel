@extends('layouts.app')

@section('title', 'Адмін — Деталі працівника')

@section('content')

<h2>{{ $employee->first_name }} {{ $employee->last_name }} {{ $employee->midl_name }}</h2>

<p>Email: {{ $employee->email }}</p>
<p>Телефон: {{ $employee->phone }}</p>
<p>Стать: {{ $employee->gender }}</p>
<p>Дата прийому: {{ $employee->hire_date }}</p>
<p>Дата звільнення: {{ $employee->termination_date ?? '—' }}</p>
<p>Статус: {{ $employee->status }}</p>
<p>Посада: {{ $employee->position->name ?? '—' }}</p>
<p>Відділ: {{ $employee->department->name ?? '—' }}</p>

<h4>Задачі</h4>
@if($employee->tasks->isEmpty())
    <p>Немає задач</p>
@else
<table border="1" cellpadding="6">
    <thead>
        <tr><th>Назва</th><th>Опис</th><th>Початок</th><th>Кінець</th><th>Статус</th></tr>
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

<br>
<a href="{{ route('admin.employees.index') }}">← Назад до списку</a>

@endsection