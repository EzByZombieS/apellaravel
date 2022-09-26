<?php

namespace App\View\Components;

use Illuminate\View\Component;

class authLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('themes.auth.main');
    }
}