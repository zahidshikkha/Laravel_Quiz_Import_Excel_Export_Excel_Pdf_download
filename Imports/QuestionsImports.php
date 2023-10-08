<?php

namespace App\Imports;

use App\Models\Question;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Question([

            'exam_id' => $row[0],
            'exam_questions'=> $row[1],
            'a'=> $row[2],
            'b'=> $row[3],
            'c'=> $row[4],
            'd'=> $row[5],
            'answer'=> $row[6],
        ]);
    }
}
