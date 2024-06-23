<?php

namespace App;

use Illuminate\Contracts\Support\Htmlable;
use Stringable;

class Content implements Htmlable, Stringable
{
    public function toHtml(): string
    {
        return '<div>From class</div>';
    }

    public function __toString()
    {
        return $this->toHtml();
    }
}
