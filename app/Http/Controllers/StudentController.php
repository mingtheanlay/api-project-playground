<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Create a function to reponse to API request to retrieve all students
    public function getStudents()
    {
        // Get all students from database
        $students = Student::all();
        
        // Return the response
        return response()->json($students);
    }

    // Create a function to reponse to API request to retrieve a student
    public function getStudent($id)
    {
        // Get a student from database
        $student = Student::find($id);
        
        // Return the response
        return response()->json($student);
    }

    // Create a function to reponse to API request to create a student
    public function createStudent(Request $request)
    {
        // Create a new student
        $student = new Student;
        
        // Set the student's attributes
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->course_id = $request->course_id;
        
        // Save the student
        $student->save();
        
        // Return the response
        return response()->json($student);
    }

    // Create a function to reponse to API request to update a student
    public function updateStudent(Request $request, $id)
    {
        // Get a student from database
        $student = Student::find($id);
        
        // Set the student's attributes
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->course_id = $request->course_id;
        
        // Save the student
        $student->save();
        
        // Return the response
        return response()->json($student);
    }

    // Create a function to reponse to API request to delete a student
    public function deleteStudent($id)
    {
        // Get a student from database
        $student = Student::find($id);
        
        // Delete the student
        $student->delete();
        
        // Return the response
        return response()->json($student);
    }

}
