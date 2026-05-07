<?php

use App\NativeComponents\CheckboxShowcase;
use App\NativeComponents\Home;
use App\NativeComponents\Layouts\NativeTabsLayout;
use App\NativeComponents\SelectorShowcase;
use App\NativeComponents\SliderShowcase;
use App\NativeComponents\TextInputShowcase;
use Illuminate\Support\Facades\Route;

Route::nativeGroup(NativeTabsLayout::class, function () {
    Route::native('/', Home::class)->name('home');
    Route::native('/slider', SliderShowcase::class)->name('slider');
    Route::native('/text', TextInputShowcase::class)->name('text');
    Route::native('/checkbox', CheckboxShowcase::class)->name('checkbox');
    Route::native('/selector', SelectorShowcase::class)->name('selector');
});
