<?php

namespace App\View\Composers;

use Illuminate\View\View;

class MetaComposer

{

    public function compose(View $view)
    {
        $metaTitle = 'Blade Test';
        $view->with('metaTitle', $metaTitle);

    }
}
