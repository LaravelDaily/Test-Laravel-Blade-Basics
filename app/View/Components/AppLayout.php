<?php

namespace App\View\Components;

use Illuminate\View\Component;

use function compact;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $metaTitle = 'Blade Test';
        $header = 'Main Layout';

        return view(
            'layouts.app',
            compact(
                'metaTitle',
                'header'
            )
        );
    }
}
