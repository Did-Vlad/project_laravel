@extends('layouts.app')
@section('title', $project->name)
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">{{ $project->name }}</h2>
        <a href="{{ url('/projects') }}" class="btn btn-secondary">← Назад</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Назва</th>
                    <td>{{ $project->name }}</td>
                </tr>
                <tr>
                    <th>Опис</th>
                    <td>{{ $project->description ?? '—' }}</td>
                </tr>
                <tr>
                    <th>Бюджет</th>
                    <td>{{ number_format($project->budget, 2) }} грн</td>
                </tr>
                <tr>
                    <th>Дата початку</th>
                    <td>{{ $project->start_date ?? '—' }}</td>
                </tr>
                <tr>
                    <th>Дата завершення</th>
                    <td>{{ $project->end_date ?? '—' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection