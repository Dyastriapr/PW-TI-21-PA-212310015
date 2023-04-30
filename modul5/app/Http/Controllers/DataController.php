<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
     public static $data = [
        ['Course' => 'Matematika', 'Type' => 'Diskrit', 'Rate' => 4],
        ['Course' => 'Matematika', 'Type' => 'Aljabar Linear', 'Rate' => 3],
        ['Course' => 'Basis Data', 'Type' => 'DLL', 'Rate' => 2],
        ['Course' => 'Bhs Inggris', 'Type' => 'Speaker', 'Rate' => 1]
    ];

    public function skillAcademic()
    {
        return view('table', [
            'data' => self::$data
        ]);
    }
}
