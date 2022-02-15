<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        return view('materi.index');
    }

    public function findMateri($classId, $themeId)
    {
        $data = [
            'materis' => Materi::where('class', '=', $classId)->where('theme', '=', $themeId)->get(),
            'classId' => $classId,
            'themeId' => $themeId
        ];
        return view('materi.findIndex', $data);
    }
}
