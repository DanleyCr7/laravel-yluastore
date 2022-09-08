<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $categorias;

    public function __construct($categorias)
    {
        $this->categorias = $categorias;
    }

    public function render()
    {
        return view('components.header');
    }
}
