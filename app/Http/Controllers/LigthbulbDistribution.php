<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LigthbulbDistribution extends Controller
{
    /**
     * Show form
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('lightbulb-distribution/index');
    }

    /**
     * Get, validate and process file
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($request)
    {
        $validatedData = $request->validate([
         'file' => 'required|mimes:txt|max:2048',
        ]);

        $name = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->store('public/files');

        return redirect('file-upload')->with('status', 'File has been processed successfully"');
    }
}
