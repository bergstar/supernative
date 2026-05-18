<?php

namespace App\NativeComponents;

use App\NativeComponents\Concerns\WithNavBarActions;
use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class SliderShowcase extends NativeComponent
{
    use WithNavBarActions;

    public float $live = 50.0;

    public float $debounced = 50.0;

    public float $onRelease = 50.0;

    public function navTitle(): string
    {
        return 'Slider';
    }

    public function render(): Element
    {
        return $this->view('slider-showcase');
    }
}
