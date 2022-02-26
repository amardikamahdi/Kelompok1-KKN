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
            'allMateris' => Materi::paginate(10),
            'allMaterisCount' => Materi::all()->count()
        ];
        return view('dashboard.materi.index', $data);
    }

    public function addMateri()
    {
        return view('dashboard.materi.add');
    }

    public function createMateri(Request $request)
    {
        // Upload file
        if($request->file('file') != NULL){
            $fileName = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('public/materis', $fileName);
        }else{
            $fileName = NULL;
        }
        $materi = new Materi;
        $materi->name = $request->name;
        $materi->class = $request->class;
        $materi->description = $request->description;
        $materi->theme = $request->theme;
        $materi->subject = $request->subject;
        $materi->file = $fileName;
        $materi->uploaded_by = "Administrator";
        if($materi->save()){
            return redirect()->route('dashboard.materi.index');
        }else{
            return redirect()->route('dashboard.materi.index');
        }
    }
}
