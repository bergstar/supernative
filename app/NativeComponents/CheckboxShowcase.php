<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\NativeComponent;

class CheckboxShowcase extends NativeComponent
{
    public bool $newsletter = true;

    public bool $marketing = false;

    public bool $terms = false;

    public function navTitle(): string
    {
        return 'Checkbox';
    }

    public function toggle(string $field): void
    {
        if (property_exists($this, $field) && is_bool($this->{$field})) {
            $this->{$field} = ! $this->{$field};
        }
    }

    public function render(): Element
    {
        return $this->view('checkbox-showcase');
    }
}
