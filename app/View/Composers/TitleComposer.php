<?php

namespace App\View\Composers;

use Illuminate\View\View;

class TitleComposer
{
    public function compose(View $view): void
    {
        $view->with('metaTitle', 'Blade Test');
    }
}
