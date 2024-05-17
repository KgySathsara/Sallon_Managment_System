<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Report;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
{

    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    Report::create($request->all());

    return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
}

    public function get(Request $request)
    {
        $report = Report::all();
        return view('reports.index', compact('report'));
    }
    public function index()
    {
        return view('reports.create');
    }
}
