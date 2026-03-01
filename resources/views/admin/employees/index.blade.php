<td>
    <a href="{{route('admin.employees.show', $employee)}}">Переглянути</a>

    <form action="{{route('admin.empoyees.destroy', $employee)}}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Видалити цього співробітника?')">Видалити</button>
</form>
</td>
