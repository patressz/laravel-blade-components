<?php

namespace Patressz\LaravelBladeComponents\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $framework = null)
    {
        $this->framework = $framework ?? config('blade-components.css_framework', 'tailwind');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view("blade-components::components.{$this->framework}.form.select");
    }
}
