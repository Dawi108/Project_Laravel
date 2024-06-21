<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Question;

class FQuestionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'question_paper' => ['required', 'string'],
            'term' => ['required', 'in:mid_term,end_term'],
            'file' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2048'],
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }

        $question = new Question();
        $question->question_paper = $request->question_paper;
        $question->term = $request->term;
        $question->file_path = $filePath; // Save the file path
        $question->save();

        return redirect()->back()->with('success', 'Question paper added successfully.');
    }
}
