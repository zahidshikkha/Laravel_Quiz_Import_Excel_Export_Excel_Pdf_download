<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = ['exam_name', 'total', 'marks_obtained', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
