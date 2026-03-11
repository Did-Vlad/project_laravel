@extends('layouts.app')

@section('titel', $project->name)

@section('content')

<h2>{{$project->name}}</h2>

<p>Опис: {{ $project->description}}</p>
<p>Бюджет: {{ $project->budget}}</p>
<p>Дата початку: {{ $project->start_date}}</p>
<p>Дата кінця: {{ $project->end_date ?? '-'}}</p>

<h4>Задачі</h4>
@if($project->tasks->isEmpty())
  <p>Немає задачі</p>
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
        @foreach($project->tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->start_date }}</td>
            <td>{{ $task->end_date }}</td>
            <td>{{ $task->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<br>
<a href="/projects">Назад до списку</a>

@endsection