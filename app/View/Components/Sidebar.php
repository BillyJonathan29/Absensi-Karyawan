<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $brand;
    public $items;

    /**
     * Create a new component instance.
     *
     * @param  string  $brand
     * @param  array  $items
     * @return void
     */
    public function __construct($brand = 'Default Brand', $items = [])
    {
        $this->brand = $brand;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
