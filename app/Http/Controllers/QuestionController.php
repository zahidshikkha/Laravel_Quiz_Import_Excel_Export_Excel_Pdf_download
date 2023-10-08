<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use Illuminate\Support\Facades\Notification;
use App\Notifications\QuestionAdded;

class QuestionController extends Controller
{
    public function create($id)
    {
        $exam = Exam::where('id',$id)->first();
        return view('questions.create',compact('exam'));

    }

    public function store(Request $request)
    {

                $rules = [
                    'exam_id' => 'required|string|max:255',
                    'exam_questions' => 'required|string|max:255',
                    'a' => 'required|string|max:255',
                    'b' => 'required|string|max:255',
                    'c' => 'required|string|max:255',
                    'd' => 'required|string|max:255',
                    'answer' => 'required|string|max:20',
                ];

                $validator = Validator::make($request->all(), $rules);

                if ($validator->fails()) {
                    return redirect()->route('question.create', ['id' => $request->exam_id])->withErrors($validator)->withInput();
                }

                Question::create($request->all());

                return redirect()->route('question.create', ['id' => $request->exam_id])->with('success', 'Question created successfully.');


    }

}
