<?php

namespace App\NativeComponents\Layouts;

use Native\Mobile\Edge\Layouts\Builders\NavAction;
use Native\Mobile\Edge\Layouts\Builders\NavBar;
use Native\Mobile\Edge\Layouts\Builders\Tab;
use Native\Mobile\Edge\Layouts\Builders\TabBar;
use Native\Mobile\Edge\Layouts\NativeLayout;
use Native\Mobile\Edge\NativeComponent;

/**
 * Sole layout for the app — provides both the SwiftUI NavigationStack
 * header and the SwiftUI TabView bottom bar. With no `backgroundColor`
 * set on either bar, iOS 26+ renders Liquid Glass material on both.
 *
 * This layout demonstrates all available NavBar and TabBar features.
 */
class NativeTabsLayout extends NativeLayout
{
    public function usesNativeChrome(): bool
    {
        return true;
    }

    public function navBar(NativeComponent $screen): ?NavBar
    {
        $bar = NavBar::make()
            ->title($screen->navTitle())
            ->displayMode('large')  // Large title that collapses on scroll (iOS 26+)
            ->back();

        // Add a search bar with debounce
        $bar->searchBar(
            placeholder: 'Search...',
            onQuery: 'onSearch',
            debounceMs: 300,
        );

        // Add action buttons to the right side
        $bar->action(
            NavAction::make('search_action')
                ->icon('magnifyingglass')
                ->press('openSearch')
        );

        // Add a menu button with dropdown items
        $bar->action(
            NavAction::make('more')
                ->icon('ellipsis.circle')
                ->items([
                    NavAction::make('settings')
                        ->label('Settings')
                        ->icon('gearshape')
                        ->press('openSettings'),
                    NavAction::divider(),
                    NavAction::make('about')
                        ->label('About')
                        ->icon('info.circle')
                        ->press('openAbout'),
                    NavAction::make('refresh')
                        ->label('Refresh')
                        ->icon('arrow.clockwise')
                        ->press('refresh'),
                    NavAction::divider(),
                    NavAction::make('logout')
                        ->label('Log Out')
                        ->icon('arrow.right.square')
                        ->destructive()
                        ->press('logout'),
                ])
        );

        return $bar;
    }

    public function tabBar(NativeComponent $screen): ?TabBar
    {
        return TabBar::make()
            // Active tab color (iOS: tint, Android: selected indicator)
            ->activeColor('#00AAFF')
            // Inactive tab color (overrides dark mode defaults)
            ->textColor('#94A3B8')
            // Dark mode enables glass/translucent material
            ->dark(true)
            // iOS 26+: bar shrinks to pill on scroll (Music/Podcasts pattern)
            ->minimizeOnScroll(true)
            // Show labels: 'labeled' (all), 'selected' (active only), 'unlabeled' (icons only)
            ->labelVisibility('labeled')
            // Main tabs
            ->add(Tab::link('Home', '/', icon: 'house'))
            ->add(
                Tab::link('Slider', '/slider', icon: 'slider.horizontal.3')
                    ->badge('New', '#00AAFF')  // Badge with custom color
                    ->news(true)  // Shows "new" indicator (pulsing dot on iOS)
            )
            ->add(Tab::link('Text', '/text', icon: 'textformat'))
            ->add(
                Tab::link('Checkbox', '/checkbox', icon: 'checkmark.square')
                    ->badge('3')  // Numeric badge (like notification count)
            )
            ->add(Tab::link('Selector', '/selector', icon: 'list.bullet'));
    }

    /**
     * Optional: Define a tabBarAccessory() to add content above the tab bar.
     * This could be a mini-player, status bar, or any interactive element.
     * The accessory moves inline with the active tab when minimizeOnScroll is true.
     */
    /*
    public function tabBarAccessory(NativeComponent $screen): ?NativeComponent
    {
        // Return a component instance here to show it above the tab bar
        // For example, a mini music player or quick action bar
        return null;
    }
    */
}
