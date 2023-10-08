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
        $perPage = 16728; // Adjust this to your desired page size
        $page = request('page', 1); // Get the current page from the request

        // Retrieve a chunk of data for the current page
        $results = Result::paginate($perPage, ['*'], 'page', $page);

        $pdf = PDF::loadView('result.pdf', ['result' => $results]);

        // Define the PDF file name including the page number
        $pdfFileName = 'result_page_' . $page . '.pdf';

        // Download the PDF file with the specified name
        return $pdf->download($pdfFileName);
    }
}
