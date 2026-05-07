<?php

namespace App\NativeComponents\Layouts;

use Native\Mobile\Edge\Layouts\Builders\NavBar;
use Native\Mobile\Edge\Layouts\Builders\Tab;
use Native\Mobile\Edge\Layouts\Builders\TabBar;
use Native\Mobile\Edge\Layouts\NativeLayout;
use Native\Mobile\Edge\NativeComponent;

/**
 * Sole layout for the app — provides both the SwiftUI NavigationStack
 * header and the SwiftUI TabView bottom bar. With no `backgroundColor`
 * set on either bar, iOS 26+ renders Liquid Glass material on both.
 */
class NativeTabsLayout extends NativeLayout
{
    public function usesNativeChrome(): bool
    {
        return true;
    }

    public function navBar(NativeComponent $screen): ?NavBar
    {
        return NavBar::make()
            ->back()
            ->title($screen->navTitle());
    }

    public function tabBar(NativeComponent $screen): ?TabBar
    {
        return TabBar::make()
            ->activeColor('#A855F7')
            ->minimizeOnScroll()
            ->add(Tab::link('Home', '/', icon: 'house'))
            ->add(Tab::link('Slider', '/slider', icon: 'slider.horizontal.3'))
            ->add(Tab::link('Text', '/text', icon: 'textformat'))
            ->add(Tab::link('Checkbox', '/checkbox', icon: 'checkmark.square'))
            ->add(Tab::link('Selector', '/selector', icon: 'list.bullet'));
    }
}
