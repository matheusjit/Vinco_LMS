<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
{
    /**
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     * @return View|Closure|string
     *
     * @author scotttresor <scotttresor@gmail.com>
     */
    public function render(): View|string|Closure
    {
        return view('backend.partials.header');
    }
}
