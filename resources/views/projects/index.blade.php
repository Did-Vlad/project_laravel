@extends('layouts.app')

@section('title', 'Проекти')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Проекти</h1>
    <a href="/projects/create" class="btn btn-success">Додати проект</a>
</div>

@foreach($projects as $project)
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title fw-bold">{{ $project->name }}</h4>
            <p class="card-text text-muted">{{ $project->description }}</p>
            <p class="card-text">Бюджет: {{ $project->budget }}</p>
            <a href="/projects/{{ $project->id }}" class="btn btn-primary btn-sm">Детальніше</a>
        </div>
    </div>
@endforeach

@endsection