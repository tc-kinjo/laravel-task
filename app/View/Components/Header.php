<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public $heading;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading = '', $name)
    {
        $this->heading = $heading;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
