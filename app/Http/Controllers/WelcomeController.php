<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'IPAMaterisCount' => Materi::where('subject', '=', 'Ilmu Pengetahuan Alam')->count()
        ];
        return view('welcome', $data);
    }
}
