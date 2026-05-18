<?php

namespace App\NativeComponents\Concerns;

use Native\Mobile\Facades\Dialog;

/**
 * Trait for components to use with NativeTabsLayout.
 * Provides default implementations for common nav bar actions.
 *
 * Usage in a NativeComponent:
 *
 *   use App\NativeComponents\Concerns\WithNavBarActions;
 *
 *   // Now the component responds to menu presses, search, etc.
 */
trait WithNavBarActions
{
    /**
     * Called when the search bar query changes.
     * Override in your component for custom search behavior.
     */
    public function onSearch(string $query): void
    {
        // Default: just log or show the query
        // Override to implement actual search
        Dialog::toast("Search: {$query}");
    }

    /**
     * Opens the full-screen search interface.
     */
    public function openSearch(): void
    {
        Dialog::toast('Opening search...');
    }

    /**
     * Opens settings.
     */
    public function openSettings(): void
    {
        Dialog::toast('Opening settings...');
    }

    /**
     * Opens about.
     */
    public function openAbout(): void
    {
        Dialog::toast('About this app');
    }

    /**
     * Refreshes the current content.
     */
    public function refresh(): void
    {
        Dialog::toast('Refreshing...');
        // Override to implement actual refresh logic
    }

    /**
     * Logs the user out.
     */
    public function logout(): void
    {
        Dialog::alert(
            'Log Out',
            'Are you sure you want to log out?',
            ['Cancel', 'Log Out']
        );
    }
}
