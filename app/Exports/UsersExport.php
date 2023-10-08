<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Result;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Result::with('user')->get();
    }
    public function headings(): array
    {
        return [
            'ID',
            'User Name',
            'Exam Name',
            'Total',
            'Obtained Marks',
            // Add more headings as needed
        ];
    }

    public function map($result): array
    {
        return [
            $result->id,
            $result->user->name,
            $result->exam_name,
            $result->total,
            $result->marks_obtained,
             // Access the user's name through the relationship
            // Add other data fields as needed
        ];
    }
}
