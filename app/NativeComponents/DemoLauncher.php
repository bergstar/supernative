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
    public array $demos = [
        ['id' => 'buttonsform', 'title' => 'Buttons (Form)', 'subtitle' => 'Variants, sizes, extras in a NavigationStack + grouped form', 'icon' => 'list.bullet.rectangle', 'color' => '#0EA5E9', 'url' => '/buttons-form'],
        ['id' => 'nativechrome', 'title' => 'Native Chrome', 'subtitle' => 'NavigationStack-rendered top bar; Liquid Glass on iOS 26+', 'icon' => 'square.stack.3d.up.fill', 'color' => '#A855F7', 'url' => '/native-chrome'],
        ['id' => 'nativetabs', 'title' => 'Native Tabs', 'subtitle' => 'TabView-rendered bottom bar; Liquid Glass on iOS 26+', 'icon' => 'rectangle.bottomthird.inset.filled', 'color' => '#A855F7', 'url' => '/native-tabs'],

        ['id' => 'counter', 'title' => 'Counter', 'subtitle' => 'Minimal Livewire-style counter', 'icon' => 'add', 'color' => '#10B981', 'url' => '/counter'],
        //        ['id' => 'benchmark', 'title' => 'Benchmark',        'subtitle' => 'Render perf benchmarks',                                            'icon' => 'bolt',               'color' => '#F59E0B', 'url' => '/benchmark'],
    ];

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
