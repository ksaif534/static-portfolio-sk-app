<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait GetProjects
{
    public function projects($filepath): string
    {
        if (Storage::disk('custom')->exists($filepath)) {
            $jsonData = Storage::disk('custom')->get($filepath);
        } else {
            $jsonData = null;
        }

        return $jsonData;
    }

    public function getOverview(): string
    {
        return 'Projects';
    }

    public function getFilePath(): string
    {
        return 'projects.json';
    }
}
