<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    private string $metaTitle;

    public function __construct(string $metaTitle = 'Blade Test')
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app', ['metaTitle' => $this->metaTitle]);
    }
}
