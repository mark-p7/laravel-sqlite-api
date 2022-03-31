<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the input
        request()->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'School' => 'required',
        ]);
        return Student::create([
            'FirstName' => request('FirstName'),
            'LastName' => request('LastName'),
            'School' => request('School'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        request()->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'School' => 'required',
        ]);
        $isSuccess = $student->update([
            'FirstName' => request('FirstName'),
            'LastName' => request('LastName'),
            'School' => request('School'),
        ]);
        return [
            'success' => $isSuccess
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $isSuccess = $student->delete([
            'FirstName' => request('FirstName'),
            'LastName' => request('LastName'),
            'School' => request('School'),
        ]);
        return [
            'success' => $isSuccess
        ];
    }
}
