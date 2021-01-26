<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropdownComponent extends Component
{
    /**
     * Key of pre selected option.
     *
     * @var string $selected
     */
    public string $selected;

    /**
     * Array of all options.
     */
    public array $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->options = [
            '00' => 'Select a Country',
            'US' => 'United States',
            'UK' => 'United Kingdom',
            'MX' => 'Mexico',
            'NL' => 'Netherlands',
            'SE' => 'Sweden',
            'NO' => 'Norway',
            'FI' => 'Finland',
            'DK' => 'Denmark',
        ];

        $this->selected = 'NL';
    }

    /**
     * Check if current pre selected key
     * matches current option key.
     *
     * @param string $option Option to check.
     *
     * @return boolean
     */
    public function isSelected(string $option)
    {
        return $this->selected === $option;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dropdown-component');
    }
}
