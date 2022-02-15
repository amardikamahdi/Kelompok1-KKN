<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $data = [
            'allMateris' => Materi::all()
        ];
        return view('dashboard.materi', $data);
    }
}
