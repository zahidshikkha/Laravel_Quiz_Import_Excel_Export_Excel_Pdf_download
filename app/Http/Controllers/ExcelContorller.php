<?php

namespace App\Http\Controllers;
use App\Imports\QuestionsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Question;


class ExcelContorller extends Controller
{
    public function show()
    {
        return view('questions.show');
    }
    public function import(Request $request)
    {
        $questions = Question::get();
            foreach ($questions as $question) {
                $question->delete();
            }

        $file = $request->file('file')->store('import');
        Excel::import(new QuestionsImport, $file);

        return back()->withStatus('Successfully');
    }

}
