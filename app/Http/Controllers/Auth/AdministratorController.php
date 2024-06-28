<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Administrator; 
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;



class AdministratorController extends Controller
{
    public function create()
    {
        return view('administrator.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program' => ['required', 'string', 'max:255'],
            'courses' => ['required', 'string', 'max:255'],
        ]);

        $administrator = new Administrator();
        $administrator->program = $request->program;
        $administrator->courses = $request->courses;
        $administrator->save();

        return redirect()->route('welcome');
    }


}
