<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $description;
    public $rTime;
    public $date;
    public $category;

    public function __construct($title, $description, $rTime, $date, $category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->rTime = $rTime;
        $this->date = $date;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
