@extends('layouts.app')

@section('title', 'Співробітники')

@section('content')

<div class="container mt-4">
    <h2>Список співробітників</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Ім'я</th>
                <th>Прізвище</th>
                <th>Email</th>
                <th>Посада</th>
                <th>Відділ</th>
                <th>Статус</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->position->name ?? '—' }}</td>
                <td>{{ $employee->department->name ?? '—' }}</td>
                <td>{{ $employee->status }}</td>
                <td>
                    <a href="{{ route('admin.employees.show', $employee) }}" class="btn btn-sm btn-primary">Переглянути</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection