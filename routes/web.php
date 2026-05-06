<?php

use App\NativeComponents\Browse;
use App\NativeComponents\ButtonsForm;
use App\NativeComponents\Counter;
use App\NativeComponents\DemoLauncher;
use App\NativeComponents\ExploreButtons;
use App\NativeComponents\ExploreCards;
use App\NativeComponents\ExploreForms;
use App\NativeComponents\ExploreIcons;
use App\NativeComponents\ExploreLayout;
use App\NativeComponents\ExploreSheets;
use App\NativeComponents\ExploreTypography;
use App\NativeComponents\Home;
use App\NativeComponents\ItemDetail;
use App\NativeComponents\Layouts\NativeStackLayout;
use App\NativeComponents\Layouts\NativeTabsLayout;
use App\NativeComponents\Layouts\StackLayout;
use App\NativeComponents\Layouts\TabsLayout;
use App\NativeComponents\NativeChromeDemo;
use App\NativeComponents\NativeChromeDetail;
use App\NativeComponents\NativeTabsHome;
use App\NativeComponents\NativeTabsProfile;
use App\NativeComponents\Profile;
use App\NativeComponents\TestLayout;
use Illuminate\Support\Facades\Route;
use Native\Mobile\Edge\BenchmarkComponent;

// ── Demo launcher (root) ──
// Wrapped in NativeStackLayout so the title bar renders via SwiftUI's
// NavigationStack — fixed at the top, with Liquid Glass on iOS 26+.
Route::nativeGroup(NativeStackLayout::class, function () {
    Route::native('/', DemoLauncher::class)->name('demos');
});

// ── Layout demo (Tabs) ──
Route::nativeGroup(TabsLayout::class, function () {
    Route::native('/tabs', Home::class)->name('home');
    Route::native('/tabs/browse', Browse::class)->name('browse');
    Route::native('/tabs/profile', Profile::class)->name('profile');
});

// ── Layout demo: pushed detail (Stack with auto-back) ──
Route::native('/item/{id}', ItemDetail::class)
    ->layout(StackLayout::class)
    ->name('item.detail');

// ── Demo HOME routes — get a back-arrow TopBar via StackLayout ──
Route::nativeGroup(StackLayout::class, function () {
    // Component showcases (broken out from explore)
    Route::native('/explore/buttons', ExploreButtons::class)->name('explore.buttons');
    Route::native('/explore/forms', ExploreForms::class)->name('explore.forms');
    Route::native('/explore/typography', ExploreTypography::class)->name('explore.typography');
    Route::native('/explore/cards', ExploreCards::class)->name('explore.cards');
    Route::native('/explore/icons', ExploreIcons::class)->name('explore.icons');
    Route::native('/explore/layout', ExploreLayout::class)->name('explore.layout');
    Route::native('/explore/sheets', ExploreSheets::class)->name('explore.sheets');
    Route::native('/layout-test', TestLayout::class)->name('layout.test');

    // Mini app demos
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
