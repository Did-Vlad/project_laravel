@extends('layouts.app')

@section('title', 'Співробітники')

@section('content')
    <h2>Список співробітників</h2>

    <div class="row">
        @foreach($employees as $employee)
            <div class="col-md-4">
                <x-card 
                    :title="$employee['first_name'] . ' ' . $employee['last_name']"
                    :subtitle="$employee->position->title ?? 'Невідомо'"
                    :link="'/employees/' . $employee['id']"
                />
            </div>
        @endforeach
    </div>
@endsection