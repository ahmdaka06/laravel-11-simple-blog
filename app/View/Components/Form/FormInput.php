<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{

    public $id;
    public $name;
    public $label;
    public $type;


    public function __construct(
        string $name,
        string $label,
        string $type = 'text',
        string $id = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->id = $id ?? $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.form-input');
    }
}
