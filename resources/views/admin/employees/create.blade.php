@extends('layouts.app')

@section('title', 'Додати працівника')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Додати нового працівника</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.employees.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Ім'я</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Прізвище</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">По батькові</label>
                <input type="text" name="midl_name" class="form-control" value="{{ old('midl_name') }}">
                @error('midl_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Стать</label>
                <select name="gender" class="form-select">
                    <option value="">-- Оберіть --</option>
                    <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>Чоловіча</option>
                    <option value="F" {{ old('gender') == 'F' ? 'selected' : '' }}>Жіноча</option>
                </select>
                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Телефон</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Дата прийому</label>
                <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date') }}">
                @error('hire_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Дата звільнення</label>
                <input type="date" name="termination_date" class="form-control" value="{{ old('termination_date') }}">
                @error('termination_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Статус</label>
                <select name="status" class="form-select">
                    <option value="">-- Оберіть --</option>
                    <option value="Активний" {{ old('status') == 'Активний' ? 'selected' : '' }}>Активний</option>
                    <option value="Звільнений" {{ old('status') == 'Звільнений' ? 'selected' : '' }}>Звільнений</option>
                </select>
                @error('status') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Посада</label>
                <select name="position_id" class="form-select">
                    <option value="">-- Оберіть --</option>
                    @foreach($positions as $position)
                        <option value="{{ $position->id }}" {{ old('position_id') == $position->id ? 'selected' : '' }}>
                            {{ $position->name }}
                        </option>
                    @endforeach
                </select>
                @error('position_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Відділ</label>
                <select name="department_id" class="form-select">
                    <option value="">-- Оберіть --</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
                @error('department_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Зберегти</button>
                <a href="{{ route('admin.employees.index') }}" class="btn btn-secondary">Скасувати</a>
            </div>

        </form>
    </div>
</div>

@endsection