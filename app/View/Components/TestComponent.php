<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestComponent extends Component
{
    public function __construct(public Htmlable $content)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.test-component');
    }
}
