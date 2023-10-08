<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ExamController extends Controller
{

    public function index()
    {

        $exams = Exam::orderBy('id','asc')->get();
        return view('exam.show_exam',compact('exams'));

    }



    public function create()
    {
        return view('exam.create_exam');

    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'exam_description' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('exam.create')->withErrors($validator)->withInput();
        }

        Exam::create($request->all());

        return redirect()->route('exam.create')->with('success', 'Exam created successfully.');

    }

    public function destroy($id)
    {
        $exam_single = Exam::where('id',$id)->first();
        $questions = Question::where('exam_id',$id)->get();
            foreach ($questions as $question) {
                $question->delete();
            }
        $exam_single->delete();
        return redirect()->route('exam.index')->with('success', 'Data is deleted successfully.');
    }


}
