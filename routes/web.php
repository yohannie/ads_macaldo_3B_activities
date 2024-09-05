<?php
use App\Models\Students;
use Illuminate\Support\Facades\Route;

Route::get('/students/create', function () {
    $student = new student (

    );
    $student->first_name = 'John_Michael';
    $student->last_name = 'Macaldo';
    $student->email = 'johnmacaldo1103@gmail.com';
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
