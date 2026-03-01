@extends('layouts.app')

@section('title', 'Працівник')

@section('content')
<p>Ім'я:{{ $employee->first_name }}</p>
<p>Призвіще: {{ $employee->last_name }}</p> 

<p>По батькові: {{ $employee->midl_name }}</p>
<p>Стать: {{ $employee->gender }}</p>

<p>Email: {{ $employee->email }}</p>
<p>Телефон: {{ $employee->phone }}</p>

<p>Дата прийому: {{ $employee->hire_date }}</p>
<p>Дата звільнення: {{ $employee->termination_date ?? '—' }}</p>

<p>Статус: {{ $employee->status }}</p>
<p>Посада: {{ $employee->position->name ?? '' }}</p>

<a href="/employees">Назад</a>
@endsection