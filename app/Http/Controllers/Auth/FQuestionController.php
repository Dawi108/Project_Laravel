<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class FQuestionController extends Controller
{
    /**
     * Show the form for creating a new question paper.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created question paper in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_paper' => ['required', 'string'],
            'term' => ['required', 'in:mid_term,end_term'],
            'file_content' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2048'],
        ]);

        $fileContent = null;

        // Handle file upload
        if ($request->hasFile('file_content')) {
            $fileContent = base64_encode(file_get_contents($request->file('file_content')));
        } else {
            return redirect()->back()->withErrors(['file_content' => 'File upload failed.']);
        }

        // Create a new Question record
        $question = new Question();
        $question->question_paper = $request->question_paper;
        $question->term = $request->term;
        $question->file_content = $fileContent;
        $question->save();

        return redirect()->back()->with('success', 'Question paper added successfully.');
    }
}
