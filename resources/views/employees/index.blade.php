@extends('layouts.app')
@section('title', 'Співробітники')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Список співробітників</h2>
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.employees.create') }}" class="btn btn-success">+ Додати співробітника</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
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

                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.employees.edit', $employee) }}" class="btn btn-sm btn-warning">Редагувати</a>

                        <form action="{{ route('admin.employees.destroy', $employee) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Видалити співробітника?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Видалити</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection