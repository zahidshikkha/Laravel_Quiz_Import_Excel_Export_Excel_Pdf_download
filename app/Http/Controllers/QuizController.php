<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function start_quiz($id)
    {
        $questions = Question::where('exam_id',$id)->get();
        $exam = Exam::where('id',$id)->first();
        return view('quiz.start_quiz',compact('questions','exam'));
    }
    public function quiz_result(Request $request)
    {
        $questions = Question::where('exam_id', $request->exam_id)->get();
        $result=0;
        $index=1;
        foreach ($questions as $question) {
            // Access each question's properties
            if($question->answer==$request->input($index))
            {
                $result++;
            }
            $index++;
        }
        $totalquestions=$index -1;

        if(Auth::check())
        {
            $exam = Exam::where('id',$request->exam_id)->first();
            Result::create([
                'exam_name' => $exam->name,
                'total' => $totalquestions,
                'marks_obtained' => $result,
                'user_id' => Auth::user()->id,
            ]);
        }
        return view('quiz.result_quiz')->with(['result' => $result, 'totalquestions' => $totalquestions]);

    }
    public function quiz_list()
    {
        $exams = Exam::orderBy('id','asc')->get();
        return view('quiz.quiz_list',compact('exams'));
    }
}
