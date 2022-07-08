<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ShareComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('metaTitle', 'Blade Test');
    }
}
