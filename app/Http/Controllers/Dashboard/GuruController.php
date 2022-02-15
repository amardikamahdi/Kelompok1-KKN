<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data = [
            'allTeachers' => Guru::all(),
            'activeTeachers' => Guru::where('status', '=', 'Aktif')->count()
        ];
        return view('dashboard.guru', $data);
    }
}
