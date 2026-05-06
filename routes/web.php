<?php

use App\NativeComponents\ButtonsForm;
use App\NativeComponents\Counter;
use App\NativeComponents\DemoLauncher;
use App\NativeComponents\Layouts\NativeStackLayout;
use App\NativeComponents\Layouts\NativeTabsLayout;
use App\NativeComponents\Layouts\StackLayout;
use App\NativeComponents\NativeChromeDemo;
use App\NativeComponents\NativeChromeDetail;
use App\NativeComponents\NativeTabsHome;
use App\NativeComponents\NativeTabsProfile;
use App\NativeComponents\TestLayout;
use Illuminate\Support\Facades\Route;
use Native\Mobile\Edge\BenchmarkComponent;

// ── Demo launcher (root) ──
// Wrapped in NativeStackLayout so the title bar renders via SwiftUI's
// NavigationStack — fixed at the top, with Liquid Glass on iOS 26+.
Route::nativeGroup(NativeStackLayout::class, function () {
    Route::native('/', DemoLauncher::class)->name('demos');
});

// ── Demo HOME routes — get a back-arrow TopBar via StackLayout ──
Route::nativeGroup(StackLayout::class, function () {
    Route::native('/layout-test', TestLayout::class)->name('layout.test');
    Route::native('/counter', Counter::class)->name('counter');
});

// ── NavigationStack + Form/Section demo (SwiftUI grouped-form replica) ──
Route::native('/buttons-form', ButtonsForm::class)
    ->layout(NativeStackLayout::class)
    ->name('buttons.form');

// ── Native chrome — NavigationStack-rendered top bar ──
Route::native('/native-chrome', NativeChromeDemo::class)
    ->layout(NativeStackLayout::class)
    ->name('native.chrome');
Route::native('/native-chrome/detail', NativeChromeDetail::class)
    ->layout(NativeStackLayout::class)
    ->name('native.chrome.detail');

// ── Native chrome — TabView-rendered bottom bar ──
Route::native('/native-tabs', NativeTabsHome::class)
    ->layout(NativeTabsLayout::class)
    ->name('native.tabs.home');
Route::native('/native-tabs/profile', NativeTabsProfile::class)
    ->layout(NativeTabsLayout::class)
    ->name('native.tabs.profile');

// ── Extras ──
Route::native('/benchmark', BenchmarkComponent::class)->name('benchmark');
