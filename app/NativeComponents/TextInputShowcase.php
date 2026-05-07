<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class TextInputShowcase extends NativeComponent
{
    public string $name = '';

    public string $email = '';

    public string $bio = '';

    public function navTitle(): string
    {
        return 'Text Input';
    }

    public function render(): Element
    {
        return $this->view('text-input-showcase');
    }
}
