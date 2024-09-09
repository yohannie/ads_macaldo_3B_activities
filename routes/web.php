<?php
use App\Models\Students;
use App\Student;
use App\Course;
use Illuminate\Support\Facades\Route;

Route::get('/students/create', function () {
    $student = new Student();
    $student->first_name = 'John_Michael';
    $student->last_name = 'Macaldo';
    $student->email = 'johnmacaldo1103@gmail.com';
    $student->age = '23';
    $student->save();
    return 'Student Created';
});

Route::get('/students', function () {
    $students = student::all();
    return $students;
});

Route::get('/students/update', function () {
    $student = Student::where('email', 'johnmacaldo1103@gmail.com')->first();
    $student->email = 'johnmacaldo1103@gmail.com';
    $student->save();
    return 'Student Updated';
});

Route::get('/students/delete', function () {
    $student = Student::where('email', 'johnmacaldo1103@gmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

Route::get('/courses/create', function () {
    $course = new Course();
    $course->course_name = 'Introduction to Database';
    $course->save();
    return 'Course Created!';
});

Route::get('/course/{id}/students', function ($id) {
    $course = Course::find($id);
    return $course->students;
});