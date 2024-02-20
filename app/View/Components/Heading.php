<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string  $title,
        public ?string $subtitle = null,
        public ?string $text = null,
        public ?string $link = null,
        public ?string $linkText = null,
        public bool    $divide = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading');
    }
}
