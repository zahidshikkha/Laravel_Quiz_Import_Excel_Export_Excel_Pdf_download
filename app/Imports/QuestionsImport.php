<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class QuestionsImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Question([
            'exam_id' => $row['exam_id'],
            'exam_questions'=> $row['exam_questions'],
            'a'=> $row['a'],
            'b'=> $row['b'],
            'c'=> $row['c'],
            'd'=> $row['d'],
            'answer'=> $row['answer'],
        ]);



    }
}
