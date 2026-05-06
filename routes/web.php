<?php

use App\NativeComponents\DemoLauncher;
use App\NativeComponents\Layouts\NativeStackLayout;
use Illuminate\Support\Facades\Route;

// ── Demo launcher (root) ──
// Wrapped in NativeStackLayout so the title bar renders via SwiftUI's
// NavigationStack — fixed at the top, with Liquid Glass on iOS 26+.
Route::nativeGroup(NativeStackLayout::class, function () {
    Route::native('/', DemoLauncher::class)->name('demos');
});
