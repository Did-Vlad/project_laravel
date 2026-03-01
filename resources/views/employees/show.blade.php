@extends('layouts.app')

@section('title', 'Працівник')

@section('content')

<h2>{{ $employee->first_name }} {{ $employee->last_name }} {{ $employee->midl_name }}</h2>

<p>Стать: {{ $employee->gender }}</p>
<p>Email: {{ $employee->email }}</p>
<p>Телефон: {{ $employee->phone }}</p>
<p>Дата прийому: {{ $employee->hire_date }}</p>
<p>Дата звільнення: {{ $employee->termination_date ?? '—' }}</p>
<p>Статус: {{ $employee->status }}</p>
<p>Посада: {{ $employee->position->name ?? '—' }}</p>

<h4>Задачі</h4>
@if($employee->tasks->isEmpty())
    <p>Немає задач</p>
@else
<table border="1" cellpadding="6">
    <thead>
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

<h2>Навчання</h2>
@if($employee->trainings->isEmpty())
    <p>Немає навчань</p>
@else
<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>Course</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employee->trainings as $training)
        <tr>
            <td>{{ $training->course_name }}</td>
            <td>{{ $training->description }}</td>
            <td>{{ $training->start_date }}</td>
            <td>{{ $training->end_date ?? '—' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<h2>Відпустка</h2>
@if($employee->vacations->isEmpty())
    <p>Немає відпусток</p>
@else
<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>Type</th>
            <th>Start</th>
            <th>End</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employee->vacations as $vacation)
        <tr>
            <td>{{ $vacation->type }}</td>
            <td>{{ $vacation->start_date }}</td>
            <td>{{ $vacation->end_date ?? '—' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<h2>Проекти</h2>
@if($employee->projectAssignments->isEmpty())
    <p>Немає призначень</p>
@else
<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>Position</th>
            <th>Start</th>
            <th>End</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employee->projectAssignments as $assignment)
        <tr>
            <td>{{ $assignment->position->name ?? '—' }}</td>
            <td>{{ $assignment->start_date }}</td>
            <td>{{ $assignment->end_date ?? '—' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<a href="/employees">Назад</a>

@endsection