<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $overview = 'Work Experience';
        $filepath = 'work-experience.json';
        if (Storage::disk('custom')->exists($filepath)) {
            $jsonData = Storage::disk('custom')->get($filepath);
        } else {
            $jsonData = null;
        }

        return view('work-experience', compact('overview', 'jsonData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
