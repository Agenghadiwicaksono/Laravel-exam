<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exam = Exam::all();
        return view('/home',compact(['exam']));
    }

    public function create()
    {
        return view('/input');
    }

    public function store(Request $request)
    {
        $exam = Exam::create($request->except(['_token']));
        return redirect('/home');
        
    }
    public function edit($id)
    {
        $exam = Exam::find($id);
        return view('update.edit',compact('exam'));
    }
    public function update($id, Request $request)
    {
       $exam = Exam::find($id);
       $exam->update($request->all());
       return redirect('/home');
    }
    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        return redirect('/home');
    }
}






































// public function edit($id)
//     {
//         $student = Student::find($id);
        
//         return view('update.edit',compact(['student']));
//     }
//     public function update($id,Request $request)
//     {
//         $student = Student::find($id);
//         $student->update($request->all());
//         return redirect('/home');
//     }
//     public function destroy($id)
//     {
//         $student = Student::find($id);
//         $student->delete();
//         return redirect('/home');
//     }
// };
