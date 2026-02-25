@extends('layout')

@section('content')

<h1>Проекти</h1>

<a href="/projects/create" class="btn btn-success mb-3">
    Додати проект
</a>

@foreach($projects as $project)
    <div class="card p-3 mb-3">
        <h4>{{ $project->name }}</h4>
        <p>{{ $project->description }}</p>
        <p>Бюджет: {{ $project->budget }}</p>

        <a href="/projects/{{ $project->id }}">
            Детальніше
        </a>
    </div>
@endforeach

@endsection