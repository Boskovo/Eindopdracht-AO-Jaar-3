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
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }



    public function grades_index()
    {
        $grades = Grade::all();

        return view('grades.index', compact('grades'));
    }

    public function grades_store()
    {
        $grade = new Grade();
        $grade->name = request('name');

        $grade->save();

        return redirect()->back()->with('success', 'Klas is aangemaakt.');
    }

    public function grades_update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
//        Grade::where('id', $id)->update($request->all());
        Grade::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Klas is aangemaakt.');
    }

    public function grades_show($id)
    {
        $grade = Grade::find($id);
        $users = User::all();

        return view('grades.show', compact('grade', 'users'));
    }

    public function grades_destroy($id)
    {
        Grade::find($id)->delete();

        return redirect()->back()->with('success', 'Klas is verwijderd.');
    }

    public function grades_member_store($id, Request $request)
    {
        $grade_member = new Member();
        $grade_member->user_id = request('user_id');
        $grade_member->grade_id = $id;

        $grade_member->save();

        return redirect()->back()->with('success', 'Lid is toegevoegd.');
    }

    public function grades_member_destroy(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        Member::find($id)->delete();

        return redirect()->back()->with('success', 'Lid is verwijderd.');
    }


}
