<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Question;
use App\Models\Answer;
use Validator;

class ManageCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::select('id','name','course_degree','date_of_exam','duration')->get();
        return view('pages.Admin.add-course-time',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules= [
            'courseName' => 'required|unique:courses,name',
        ];
        $messages = $this->getMessages();

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator -> fails()){
            return redirect()->route('show.courses')->withErrors($validator)->withInputs($request->all());
        }

        $course = new Course([
            'name' => $request->get('courseName')
        ]);

        $course->save();

        return redirect()->route('show.courses');
    }
    protected function getMessages(){
        return $messages = [
            'courseName.required' => 'course name is required please',
            'courseDate.required' => 'course date is required please',
            'courseDegree.required' => 'course degree is required please',
            'duration.required' => 'duration is required please',
            'courseName.unique' => 'The course has already been taken',
        ];
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $studentsofcourse = $course->students; 
        $questions = $course->questions;
        
        foreach($questions as $question)
        {
            $students = $question->students;
            foreach($students as $student)
            {
                $student->pivot->delete();
            }
            $answers = $question->answers;
            if(isset($answers))
            {
                foreach($answers as $answer)
                    $answer->delete();
            }
            $question ->delete();
        }


        foreach($studentsofcourse as $student)
        {
            $student->pivot->delete();
        }

        $course -> delete();
        return redirect()->route('show.courses');
    }

    public function showTeacher(){
        $courses = Course::select('id','name','teacher_id')->get();
        $teachers = Teacher::select('id','name')->get();
        return view('pages.Admin.assign-course-for-teachers',compact('courses','teachers'));
    }

    public function addteacher(Request $request)
    {
        $course = Course::find($request->course_id);
        $course->teacher_id = $request->teacher_id;
        $course->save();
        return redirect()->route('show.course.teacher');
    }

    public function destorycourseToteacher($id)
    {
        $course = Course::find($id);
        $course->teacher_id = NULL;
        $course -> save();
        return redirect()->route('show.course.teacher');
    }

}
