<?php

namespace App\NativeComponents;

use App\NativeComponents\Concerns\WithNavBarActions;
use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class SelectorShowcase extends NativeComponent
{
    use WithNavBarActions;

    public string $material = 'Liquid Glass';

    public string $tint = 'Purple';

    public string $disabledChoice = 'Locked';

    /** @var list<string> */
    public array $materials = ['Liquid Glass', 'Frosted', 'Clear', 'Tinted', 'Regular'];

    /** @var list<string> */
    public array $tints = ['Purple', 'Teal', 'Cyan', 'Pink', 'Amber', 'Slate'];

    public function navTitle(): string
    {
        return 'Selector';
    }

    public function render(): Element
    {
        return $this->view('selector-showcase');
    }
}
