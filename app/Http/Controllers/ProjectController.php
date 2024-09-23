<?php

namespace App\Http\Controllers;

use App\Traits\GetProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    use GetProjects;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $overview = $this->getOverview();
        $filepath = $this->getFilePath();
        $jsonData = $this->projects($filepath);

        return view('projects', compact('overview', 'jsonData'));
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
        $overview = $this->getOverview();
        $filepath = $this->getFilePath();
        $jsonData = $this->projects($filepath);
        $data = json_decode($jsonData, true);
        $projectDetails = null;
        foreach ($data['projects'] as $item) {
            if ($item['id'] == $id) {
                $projectDetails = $item;
            }
        }
        $projectDetails = collect($projectDetails);

        return view('project-details', compact('overview', 'projectDetails'));
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
