<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\Element;
use Native\Mobile\Edge\Layouts\Builders\NavBarOptions;
use Native\Mobile\Edge\NativeComponent;

/**
 * Top-level launcher screen — lists every demo app in the project.
 * Tapping a row pushes that demo onto the navigation stack; the framework
 * TopBar (via StackLayout) provides a back chevron to return here.
 */
class DemoLauncher extends NativeComponent
{
    public array $demos = [];

    public function navTitle(): string
    {
        return 'SuperNative Demo';
    }

    /** Root screen — nothing to pop back to, hide the chevron. */
    public function showsNavBack(): bool
    {
        return false;
    }

    public function navigationOptions(): ?NavBarOptions
    {
        // `large` gives the iOS-native big-title-on-top, left-aligned,
        // collapses to inline as content scrolls under the bar (iOS 26+
        // gets Liquid Glass material during the collapse).
        return NavBarOptions::make()
            ->displayMode('large')
            ->subtitle('Tap a demo to launch');
    }

    public function render(): Element
    {
        return $this->view('demo-launcher');
    }
}
