<?php

namespace App\Http\Controllers;

use App\Models\GradeMember;
use App\Models\Member;
use App\Models\Student;
use App\Models\User;
use App\Models\Grade;
use App\Models\Grade_Member;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all();

        return view('student.index', compact('students'));
    }

    public function search_internship()
    {
        return view('student.searchinternship');
    }

    public function documents()
    {
        return view('student.documents');
    }

    public function dropzone (Request $request){
        dd();
        // $image = $request->file('file');


        // return response()->json(['success'=>$imageName]);
       $this->validate($request,[
          'cover_image' => 'image|nullable|max:1999' 
       ]);

       

      

       //handle file upload

       if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // get just file name 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // filename store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_image' , $fileNameToStore);
       }else {
           $fileNameToStore = 'noimage.jpg';
       }
       
       $input = $request->all();
       $input->cover_image = $fileNameToStore;

       $input = Workstate::create($input);
      

       return redirect(student/documenten)->with('success', '');
        
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function grades_show($id)
    {
        $grade = Grade::find($id);
        $grade_members = Member::find("grade_id" == $id);

        return view('grades.show', compact('grade', 'grade_members'));
    }
}
