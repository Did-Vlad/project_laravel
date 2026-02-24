<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Посади
    private $positions = [
        13 => [
            "title" => "Junior Developer",
            "description" => "Початковий рівень розробника",
            "salary" => 800.00
        ],
        14 => [
            "title" => "Middle Developer",
            "description" => "Самостійна розробка та підтримка функціоналу",
            "salary" => 300.00
        ],
        22 => [
            "title" => "HR Manager",
            "description" => "Управління персоналом компанії",
            "salary" => 350.00
        ]
    ];

    // Співробітники
    private $employees = [
        16 => [
            "first_name" => "Анна",
            "last_name" => "Іваненко",
            "middle_name" => "Василівна",
            "gender" => "F",
            "phone" => "+380631112233",
            "email" => "anna.sh@example.com",
            "hire_date" => "2010-04-18",
            "status" => "Активний",
            "position_id" => 22
        ],
        17 => [
            "first_name" => "Олег",
            "last_name" => "Данилюк",
            "middle_name" => "Коваленко",
            "gender" => "M",
            "phone" => "+380671234890",
            "email" => "oleh.dn@example.com",
            "hire_date" => "2006-11-05",
            "status" => "Активний",
            "position_id" => 13
        ],
        21 => [
            "first_name" => "Дмитро",
            "last_name" => "Омельченко",
            "middle_name" => "Коваленко",
            "gender" => "M",
            "phone" => "+380931234567",
            "email" => "dmytro.om@example.com",
            "hire_date" => "2022-02-10",
            "status" => "Активний",
            "position_id" => 14
        ]
    ];

    // Каталог співробітників (для Blade)
    public function index()
    {
        $employees = [];

        foreach ($this->employees as $id => $employee) {
            $positionTitle = $this->positions[$employee["position_id"]]["title"] ?? "Невідомо";

            $employees[] = [
                "id" => $id,
                "first_name" => $employee["first_name"],
                "last_name" => $employee["last_name"],
                "position" => $positionTitle
            ];
        }

        return view('employees.index', compact('employees'));
    }

    // Вибір конкретного співробітника
    public function show($id)
    {
        if (!isset($this->employees[$id])) {
            return "Співробітника не знайдено";
        }

        $employee = $this->employees[$id];

        $employee["position"] =
            $this->positions[$employee["position_id"]]["title"] ?? "Посаду не знайдено";

        return $employee;
    }
}