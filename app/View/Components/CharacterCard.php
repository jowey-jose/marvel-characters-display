<?php

namespace App\View\Components;

use Illuminate\View\Component;

// Acts as a controller specific to this component.
class CharacterCard extends Component
{
    public $character;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($character)
    {
        // Accept the passed component.
        $this->character = $character;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.character-card');
    }
}
