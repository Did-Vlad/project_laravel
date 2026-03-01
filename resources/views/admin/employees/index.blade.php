@extends('layouts.app')

@section('title', 'Адмін — Працівники')

@section('content')

<h2>Список працівників</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="6">
    <thead>
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
                <a href="{{ route('admin.employees.show', $employee) }}">Переглянути</a>

                <form action="{{ route('admin.employees.destroy', $employee) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Видалити працівника?')">Видалити</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection