<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
use PDF;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ResultController extends Controller
{
    public function index()
    {
        $result = Result::with('user')->get();
        return view('result.index',compact('result'));
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'results.xlsx');
    }
    public function exportpdf()
    {

        $result = Result::all();
        $pdf = PDF::loadView('result.pdf',['result' => $result]);
        // download PDF file with download method
        return $pdf->download('result.pdf');
    }
}
