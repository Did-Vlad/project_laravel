<?php
namespace Database\Seeders;
use App\Models\User;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Department;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => bcrypt('password123'), 'role' => 'user']
        );

        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            ['name' => 'Admin', 'password' => bcrypt('1234567890'), 'role' => 'admin']
        );

        $departments = [
            ['name' => 'IT відділ'],
            ['name' => 'Бухгалтерія'],
            ['name' => 'HR відділ'],
            ['name' => 'Маркетинг'],
        ];
        foreach ($departments as $d) {
            Department::firstOrCreate(['name' => $d['name']]);
        }

        $positions = [
            ['name' => 'Розробник'],
            ['name' => 'Менеджер'],
            ['name' => 'Бухгалтер'],
            ['name' => 'HR спеціаліст'],
            ['name' => 'Дизайнер'],
        ];
        foreach ($positions as $p) {
            Position::firstOrCreate(['name' => $p['name']]);
        }

        $employees = [
            ['first_name' => 'Іван', 'last_name' => 'Петренко', 'midl_name' => 'Олексійович', 'gender' => 'male', 'phone' => '+380991234567', 'email' => 'ivan@example.com', 'hire_date' => '2022-01-15', 'status' => 'active', 'position_id' => 1, 'department_id' => 1],
            ['first_name' => 'Олена', 'last_name' => 'Коваленко', 'midl_name' => 'Василівна', 'gender' => 'female', 'phone' => '+380992345678', 'email' => 'olena@example.com', 'hire_date' => '2021-03-10', 'status' => 'active', 'position_id' => 2, 'department_id' => 3],
            ['first_name' => 'Михайло', 'last_name' => 'Сидоренко', 'midl_name' => 'Іванович', 'gender' => 'male', 'phone' => '+380993456789', 'email' => 'mykhailo@example.com', 'hire_date' => '2023-06-01', 'status' => 'active', 'position_id' => 3, 'department_id' => 2],
            ['first_name' => 'Наталія', 'last_name' => 'Бондаренко', 'midl_name' => 'Сергіївна', 'gender' => 'female', 'phone' => '+380994567890', 'email' => 'natalia@example.com', 'hire_date' => '2020-09-20', 'status' => 'active', 'position_id' => 4, 'department_id' => 3],
            ['first_name' => 'Андрій', 'last_name' => 'Мельник', 'midl_name' => 'Петрович', 'gender' => 'male', 'phone' => '+380995678901', 'email' => 'andriy@example.com', 'hire_date' => '2023-11-05', 'status' => 'inactive', 'position_id' => 5, 'department_id' => 4],
            ['first_name' => 'Василь', 'last_name' => 'Ткаченко', 'midl_name' => 'Миколайович', 'gender' => 'M', 'phone' => '+380996789012', 'email' => 'vasyl@example.com', 'hire_date' => '2021-05-12', 'status' => 'active', 'position_id' => 1, 'department_id' => 1],
['first_name' => 'Юлія', 'last_name' => 'Савченко', 'midl_name' => 'Андріївна', 'gender' => 'F', 'phone' => '+380997890123', 'email' => 'yulia@example.com', 'hire_date' => '2022-08-20', 'status' => 'active', 'position_id' => 2, 'department_id' => 4],
['first_name' => 'Олексій', 'last_name' => 'Кравченко', 'midl_name' => 'Васильович', 'gender' => 'M', 'phone' => '+380998901234', 'email' => 'oleksiy@example.com', 'hire_date' => '2020-03-15', 'status' => 'active', 'position_id' => 3, 'department_id' => 2],
['first_name' => 'Марія', 'last_name' => 'Шевченко', 'midl_name' => 'Іванівна', 'gender' => 'F', 'phone' => '+380999012345', 'email' => 'maria@example.com', 'hire_date' => '2023-01-10', 'status' => 'active', 'position_id' => 4, 'department_id' => 3],
['first_name' => 'Дмитро', 'last_name' => 'Гриценко', 'midl_name' => 'Олегович', 'gender' => 'M', 'phone' => '+380990123456', 'email' => 'dmytro@example.com', 'hire_date' => '2022-11-01', 'status' => 'active', 'position_id' => 5, 'department_id' => 4],
['first_name' => 'Ірина', 'last_name' => 'Морозова', 'midl_name' => 'Петрівна', 'gender' => 'F', 'phone' => '+380991122334', 'email' => 'iryna@example.com', 'hire_date' => '2021-07-22', 'status' => 'active', 'position_id' => 1, 'department_id' => 1],
['first_name' => 'Сергій', 'last_name' => 'Лисенко', 'midl_name' => 'Дмитрович', 'gender' => 'M', 'phone' => '+380992233445', 'email' => 'serhiy@example.com', 'hire_date' => '2020-06-30', 'status' => 'inactive', 'position_id' => 2, 'department_id' => 2],
['first_name' => 'Тетяна', 'last_name' => 'Павленко', 'midl_name' => 'Сергіївна', 'gender' => 'F', 'phone' => '+380993344556', 'email' => 'tetyana@example.com', 'hire_date' => '2023-04-05', 'status' => 'active', 'position_id' => 3, 'department_id' => 2],
['first_name' => 'Роман', 'last_name' => 'Іваненко', 'midl_name' => 'Олексійович', 'gender' => 'M', 'phone' => '+380994455667', 'email' => 'roman@example.com', 'hire_date' => '2022-02-14', 'status' => 'active', 'position_id' => 4, 'department_id' => 3],
['first_name' => 'Оксана', 'last_name' => 'Федоренко', 'midl_name' => 'Василівна', 'gender' => 'F', 'phone' => '+380995566778', 'email' => 'oksana@example.com', 'hire_date' => '2021-09-18', 'status' => 'active', 'position_id' => 5, 'department_id' => 4],
        ];
        foreach ($employees as $e) {
            Employee::firstOrCreate(['email' => $e['email']], $e);
        }

        $projects = [
            ['name' => 'Корпоративний сайт', 'description' => 'Створення нового сайту компанії', 'start_date' => '2024-01-10', 'end_date' => '2024-06-30', 'budget' => 50000],
            ['name' => 'CRM система', 'description' => 'Впровадження CRM для відділу продажів', 'start_date' => '2024-03-01', 'end_date' => '2024-12-31', 'budget' => 120000],
            ['name' => 'Мобільний додаток', 'description' => 'Розробка мобільного додатку', 'start_date' => '2024-07-01', 'end_date' => '2025-03-01', 'budget' => 80000],
            ['name' => 'Редизайн офісу', 'description' => 'Оновлення інтер\'єру офісу', 'start_date' => '2023-09-01', 'end_date' => '2024-01-01', 'budget' => 30000],
            ['name' => 'HR автоматизація', 'description' => 'Автоматизація процесів HR', 'start_date' => '2024-04-15', 'end_date' => '2024-11-30', 'budget' => 25000],
        ];
        foreach ($projects as $p) {
            Project::firstOrCreate(['name' => $p['name']], $p);
        }
    }
}