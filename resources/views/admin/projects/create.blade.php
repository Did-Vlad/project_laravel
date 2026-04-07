@extends('layouts.app')

@section('title', 'Додати проєкт')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Створити новий проєкт</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Назва проєкту</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Опис</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Бюджет</label>
                <input type="number" step="0.01" name="budget" class="form-control" value="{{ old('budget') }}">
                @error('budget') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Дата початку</label>
                <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
                @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Дата завершення (планова)</label>
                <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}">
                @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Створити проєкт</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Скасувати</a>
            </div>
        </form>
    </div>
</div>

@endsection