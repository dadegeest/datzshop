<?php

namespace App\View\Components\Molecules\Admin;

use App\Http\Livewire\Traits\Menu as TraitsMenu;
use Illuminate\View\Component;

class Menu extends Component
{
    use TraitsMenu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.molecules.admin.menu');
    }
}
