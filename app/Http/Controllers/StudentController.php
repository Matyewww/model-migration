<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Student::all();

        //return Student::where('province', 'Minnesota')->get();

       // return Student::where('province', 'Minnesota')
        //->where('fname', 'Elisha')
       // ->get();
      // return Student::where('province', 'Minnesota')
      //  ->orwhere('province', 'Vermont')
      //  ->orwhere('fname', 'Danielle')
      //  ->get();

      //return Student::where('fname', 'like', '%t%')->get();

      //return Student::orderBY('fname')->get();
      //return Student::orderBY('city', 'desc')->get();
       //return Student::limit(3)->get();
       //return Student::whereNotIn('id', [1,3,5,7,9,11])->get();
       //return Student::where('province', 'Minnesota')->first();

       //return Student::with('grades')->get();
       
       return Student::with(['grades' => function($query){
        return $query->where('grade', '>=', 90);

       }])->get();
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Student::find($id);

        $student = Student::find($id);
        return $student->fullname;
        //return $student->fname . ' ' . $student->lname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   
}
