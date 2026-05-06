<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class Home extends NativeComponent
{
    public string $name = '';

    public float $sliderValue = 42.0;

    public bool $notifications = true;

    public string $material = 'Liquid Glass';

    public function navTitle(): string
    {
        return 'Glass';
    }

    public function render(): Element
    {
        return $this->view('home');
    }
}
