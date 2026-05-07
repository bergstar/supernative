<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class SliderShowcase extends NativeComponent
{
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
