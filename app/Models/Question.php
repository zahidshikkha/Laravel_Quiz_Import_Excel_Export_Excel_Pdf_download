<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'exam_questions',
        'a',
        'b',
        'c',
        'd',
        'answer',

    ];
}
