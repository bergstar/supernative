<?php

namespace App\NativeComponents;

use App\NativeComponents\Concerns\WithNavBarActions;
use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class TextInputShowcase extends NativeComponent
{
    use WithNavBarActions;

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
