@extends('layouts.app')

@section('title', 'Додати проект')

@section('content')

<h2>Додати новий проект</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/projects" method="POST">
    @csrf
<p>
    <div>
        <label>Назва</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>

<p>
    <div>
        <label>Опис</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Бюджет</label>
        <input type="number" name="cost" value="{{ old('cost') }}" step="0.01">
        @error('cost') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Дата початку</label>
        <input type="date" name="start_date" value="{{ old('start_date') }}">
        @error('start_date') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <div>
        <label>Дата кінця</label>
        <input type="date" name="end_date" value="{{ old('end_date') }}">
        @error('end_date') <span style="color:red;">{{ $message }}</span> @enderror
    </div>
</p>
<p>
    <br>
    <button type="submit">Підтвердити</button>
    <a href="/projects">Скасувати</a>
</p>
</form>

@endsection