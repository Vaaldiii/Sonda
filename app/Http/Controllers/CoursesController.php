<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use App\Http\Requests\CourseRequest;
use Illuminate\HttpResponse;
use Carbon\Carbon;

use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index(){
        $courses = Course::latest('start_date')->published()->get();
        return view('pages.courses')->with('courses', $courses);
    }

    public function show($id){
        $course = Course::findOrFail($id);
        return view('pages.show')->with('course', $course);;
    }

    public function create(){
        return view('pages.create');
    }

    /**
     * Save a new course
     *
     * @param CreateCourse $request
     * @return Response
     */

    public function store(CourseRequest $request){
        $course = New Course($request->all());
        \Auth::user()->courses()->save($course);

        return redirect('/');

    }

    public function edit($id){

        $course = Course::findOrFail($id);
        return view('pages.edit')->with('course', $course);
    }

    public function update($id, CourseRequest $request){
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect('courses');
    }
}
