<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $metaTitle = 'Blade task test';
        return view('layouts.app', compact('metaTitle'));
    }
}
