@extends('layouts.app')

@section('title', 'Додати працівника')

@section('content')

<h2>Додати нового працівника</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('admin.employees.store') }}" method="POST">
    @csrf
<p>
    <div>
        <label>Ім'я</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
        @error('first_name') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Прізвище</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
        @error('last_name') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>По батькові</label>
        <input type="text" name="midl_name" value="{{ old('midl_name') }}">
        @error('midl_name') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Стать</label>
        <select name="gender">
            <option value="">-- Оберіть --</option>
            <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>Чоловіча</option>
            <option value="F" {{ old('gender') == 'F' ? 'selected' : '' }}>Жіноча</option>
        </select>
        @error('gender') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Телефон</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
        @error('phone') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>

<p>
    <div>
        <label>Дата прийому</label>
        <input type="date" name="hire_date" value="{{ old('hire_date') }}">
        @error('hire_date') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Дата звільнення</label>
        <input type="date" name="termination_date" value="{{ old('termination_date') }}">
        @error('termination_date') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Статус</label>
        <select name="status">
            <option value="">-- Оберіть --</option>
            <option value="Активний" {{ old('status') == 'Активний' ? 'selected' : '' }}>Активний</option>
            <option value="Звільнений" {{ old('status') == 'Звільнений' ? 'selected' : '' }}>Звільнений</option>
        </select>
        @error('status') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Посада</label>
        <select name="position_id">
            <option value="">-- Оберіть --</option>
            @foreach($positions as $position)
                <option value="{{ $position->id }}" {{ old('position_id') == $position->id ? 'selected' : '' }}>
                    {{ $position->name }}
                </option>
            @endforeach
        </select>
        @error('position_id') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Відділ</label>
        <select name="department_id">
            <option value="">-- Оберіть --</option>
            @foreach($departments as $department)
                <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                    {{ $department->name }}
                </option>
            @endforeach
        </select>
        @error('department_id') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <br>
    <button type="submit">Зберегти</button>
    <a href="{{ route('admin.employees.index') }}">Скасувати</a>
</p>
</form>

@endsection
