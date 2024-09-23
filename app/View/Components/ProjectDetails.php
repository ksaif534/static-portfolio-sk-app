<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ProjectDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $overview, public Collection $projectDetails)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        return view('components.project-details');
    }
}
