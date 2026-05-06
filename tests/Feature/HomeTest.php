<?php

it('renders each tab', function (string $path) {
    $this->get($path)->assertOk();
})->with([
    '/',
    '/slider',
    '/text',
    '/checkbox',
    '/selector',
]);
