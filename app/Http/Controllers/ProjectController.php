<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Таблиця projects
    private $projects = [
        5 => [
            "name" => "CRM System",
            "description" => "Розробка CRM для компанії",
            "start_date" => "2025-01-01",
            "end_date" => "2025-12-31",
            "budget" => 150000.00
        ],
        8 => [
            "name" => "API Development",
            "description" => "Розробка та логування API для компанії",
            "start_date" => "2025-01-05",
            "end_date" => "2026-01-05",
            "budget" => 90000.00
        ],
        9 => [
            "name" => "UI/UX Enhancement",
            "description" => "Поліпшення користувацького інтерфейсу та UX",
            "start_date" => "2025-01-03",
            "end_date" => null,
            "budget" => 70000.00
        ]
    ];

    // Каталог проєктів
    public function index()
    {
        return $this->projects;
    }

    // Пошук конкретного проєкту
    public function show($id)
    {
        if (isset($this->projects[$id])) {
            return $this->projects[$id];
        }

        return "Проєкт не знайдено";
    }
}
