<?php

namespace App\Http\Controllers;

use App\Models\GradeMember;
use App\Models\Member;
use App\Models\Student;
use App\Models\User;
use App\Models\Grade;
use App\Models\Grade_Member;
use App\Models\Workstate;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
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

    public function dropzone(Request $request)
    {
        $workstate = new Workstate();

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path("/files/workstates"), $fileName);

        $workstate->title = $fileName;
        $workstate->user_id = Auth::user()->id;

        $workstate->save();

        return redirect()->back();

    }

    public function grades_index()
    {
        $grades = Grade::all();

        return view('grades.index', compact('grades'));
    }

    public function grades_store()
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $grade = new Grade();
            $grade->name = request('name');

            $grade->save();

            return redirect()->back()->with('success', 'Klas is aangemaakt.');
        }
    }

    public function grades_update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            Grade::where('id', $id)->update([
                'name' => $request->name,
            ]);

            return redirect()->back()->with('success', 'Klas is aangemaakt.');
        }
    }

    public function grades_show($id)
    {
        $grade = Grade::find($id);
        $users = User::all();

        return view('grades.show', compact('grade', 'users'));
    }

    public function grades_destroy($id)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            Grade::find($id)->delete();

            return redirect()->back()->with('success', 'Klas is verwijderd.');
        }
    }

    public function grades_member_store($id, Request $request)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $grade_member = new Member();
            $grade_member->user_id = request('user_id');
            $grade_member->grade_id = $id;

            $grade_member->save();

            return redirect()->back()->with('success', 'Lid is toegevoegd.');
        }
    }

    public function grades_member_destroy(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            Member::find($id)->delete();

            return redirect()->back()->with('success', 'Lid is verwijderd.');
        }
    }


}
