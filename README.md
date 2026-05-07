# NativePHP iOS Starter

A clean boilerplate for native iOS apps written entirely in PHP, built on
[NativePHP Mobile](https://nativephp.com). Real SwiftUI chrome — no
JavaScript frameworks, no WebViews.

What you get out of the box:

- A native `NavigationStack` header on every screen
- A native `TabView` bottom bar with five tabs
- Liquid Glass material on both bars (iOS 26+)
- Four wired-up input primitives — slider, text input, checkbox, selector —
  each on its own tab as a self-contained example
- Pest smoke tests covering every route

## Requirements

- PHP 8.4+
- Composer
- Xcode 16+ with an iOS 26 simulator (Liquid Glass renders only on iOS 26+;
  earlier OSes fall back to standard chrome)

## Quick start

```bash
composer install
cp .env.example .env
php artisan key:generate

php artisan native:install
php artisan native:run
```

`native:run` boots the app in the iOS simulator. The first launch takes a
minute while NativePHP builds the Swift host app.

## Project layout

```
app/NativeComponents/
├── Home.php                  # Tab 1 — landing screen, all four primitives
├── SliderShowcase.php        # Tab 2 — live / debounced / on-release slider
├── TextInputShowcase.php     # Tab 3 — outlined inputs with bindings
├── CheckboxShowcase.php      # Tab 4 — three checkboxes with state readout
├── SelectorShowcase.php      # Tab 5 — material/tint pickers + disabled state
└── Layouts/
    └── NativeTabsLayout.php  # Sole layout — wires NavigationStack + TabView

resources/views/native/       # One Blade view per component
routes/web.php                # Single nativeGroup wrapping the five routes
tests/Feature/HomeTest.php    # Pest dataset asserting every tab renders
```

## How it fits together

Every route is wrapped in a single `Route::nativeGroup(NativeTabsLayout::class, …)`.
That layout sets `usesNativeChrome() = true`, which tells NativePHP Mobile to
render the bars via SwiftUI's `NavigationStack` and `TabView` instead of the
fallback HStack PHP widgets. With no `backgroundColor` set on either bar, iOS
26+ paints them with Liquid Glass automatically.

A component declares its tab title with `navTitle()` and emits its UI from a
Blade view via `$this->view('home')`. Public properties on the component are
two-way bound to `<native:slider>`, `<native:outlined-text-input>`,
`<native:checkbox>`, and `<native:select>` using `native:model` (and the
`.live`, `.debounce.150ms`, `.blur` modifiers for sliders).

## Testing

```bash
php artisan test
```

The `HomeTest` dataset asserts every tab returns 200. Add a new tab? Add its
path to the dataset.

## Adding a new tab

1. Create the component:
   ```bash
   php artisan make:class NativeComponents/MyTab
   ```
   Extend `Native\Mobile\Edge\NativeComponent`, declare `navTitle()` and
   `render()` returning `$this->view('my-tab')`.
2. Add the view at `resources/views/native/my-tab.blade.php`.
3. Register the route inside the `nativeGroup` in `routes/web.php`.
4. Add the tab to `NativeTabsLayout::tabBar()`.
5. Add the path to the `HomeTest` dataset.

## License

MIT
