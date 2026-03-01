@extends('layouts.app')

@section('title', 'Працівник')

@section('content')
<h1>{{ $employee->last_name }} {{ $employee->first_name }}</h1>

<p>Email: {{ $employee->email }}</p>
<p>Телефон: {{ $employee->phone }}</p>
<p>Статус: {{ $employee->status }}</p>
<p>Посада: {{ $employee->position->name }}</p>

<a href="/employees">Назад</a>
@endsection