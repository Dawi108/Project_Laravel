<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Student;
use App\Models\Faculty;
use App\Models\Publication;
use App\Models\Book;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function studentEducation()
    {
        $students = Student::with('educations')->get();
        $pdf = Pdf::loadView('pdf.student_education', compact('students'));
        return $pdf->download('student_education.pdf');
    }

    public function faculty()
    {
        $faculties = Faculty::all();
        $pdf = Pdf::loadView('pdf.faculty', compact('faculties'));
        return $pdf->download('faculty.pdf');
    }

    public function publication()
    {
        $publications = Publication::all();
        $pdf = Pdf::loadView('pdf.publication', compact('publications'));
        return $pdf->download('publication.pdf');
    }

    public function book()
    {
        $books = Book::all();
        $pdf = Pdf::loadView('pdf.book', compact('books'));
        return $pdf->download('book.pdf');
    }

    public function allDetails()
    {
        $students = Student::with('educations')->get();
        $faculties = Faculty::all();
        $publications = Publication::all();
        $books = Book::all();
        $pdf = Pdf::loadView('pdf.all', compact('students', 'faculties', 'publications', 'books'));
        return $pdf->download('all_details.pdf');
    }
}