@extends('layouts.app')

@section('title', 'Адмін — Працівники')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Список працівників</h2>
    <a href="{{ route('admin.employees.create') }}" class="btn btn-success">Додати нового працівника</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
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

                <form action="{{ route('admin.employees.destroy', $employee) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Видалити працівника?')">Видалити</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection