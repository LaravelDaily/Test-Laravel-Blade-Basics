<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class MetaTitleViewComposer
{
    public function compose(View $view)
    {
        $view->with('metaTitle', "Blade Test");
    }
}
