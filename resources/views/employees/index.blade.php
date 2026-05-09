@extends('layouts.app')
@section('title', 'Співробітники')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Список співробітників</h2>
            <p class="text-muted">Всього: {{ count($employees) }} працівників</p>
        </div>
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.employees.create') }}" class="btn btn-success px-4">
                <i class="bi bi-person-plus"></i> + Додати співробітника
            </a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Ім'я</th>
                        <th>Прізвище</th>
                        <th>Email</th>
                        <th>Посада</th>
                        <th>Відділ</th>
                        <th>Статус</th>
                        <th class="text-center">Дії</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td class="ps-4 text-muted">{{ $employee->id }}</td>
                        <td class="fw-semibold">{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td class="text-muted">{{ $employee->email }}</td>
                        <td>{{ $employee->position->name ?? '—' }}</td>
                        <td>{{ $employee->department->name ?? '—' }}</td>
                        <td>
                            @if($employee->status === 'active')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="/employees/{{ $employee->id }}" class="btn btn-sm btn-outline-primary">Переглянути</a>
                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.employees.edit', $employee) }}" class="btn btn-sm btn-outline-warning">Редагувати</a>
                                <form action="{{ route('admin.employees.destroy', $employee) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Видалити співробітника?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Видалити</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection