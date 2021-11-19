<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;

class FrontPageComposer
{
    public function compose(View $view)
    {
        $metaTitle = 'Blade Test';

        $view->with('metaTitle', $metaTitle);
    }

}
