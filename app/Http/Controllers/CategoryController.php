<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allForHairdressers()
    {
        return view('categories.hairdressers');
    }
    public function clamps()
    {
        return view('catalog.catalog');
    }


    public function allForColorists()
    {
        // Логика для получения данных категории "Все для колористов"
        return view('categories.colorists'); // Создайте этот вид
    }

    public function accessories()
    {
        return view('categories.accessories'); // Создайте этот вид
    }

    public function consumables()
    {
        return view('categories.consumables'); // Создайте этот вид
    }

// вложенность все для парикмахеров
    public function hairdressersMachines()
    {
        return view('categories.hairdressers.Machines'); // Создайте этот вид
    }
    public function hairdressersScissors()
    {
        // Логика для получения данных категории "Шампуни"
        return view('categories.hairdressers.scissors'); // Создайте этот вид
    }
    public function hairdressersCurlingIronsStraighteners()
    {
        // Логика для получения данных категории "Шампуни"
        return view('categories.hairdressers.CurlingIronsStraighteners'); // Создайте этот вид
    }
    public function hairdressersСombs()
    {
        // Логика для получения данных категории "Шампуни"
        return view('categories.hairdressers.combs'); // Создайте этот вид
    }

}
