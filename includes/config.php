<?php
declare(strict_types=1);

const SITE_NAME = 'HaloBlock';
const VERSION = '4.4';
const SITE_TAGLINE = 'A cleaner web, automatically.';

// These are developer packages. They are not signed browser-store releases.
const PLATFORMS = [
    'chrome' => [
        'name' => 'Google Chrome', 'short' => 'Chrome', 'icon' => 'chrome.svg', 'color' => 'chrome',
        'file' => 'HaloBlock-Chrome-v4.4.zip', 'category' => 'Developer build',
        'note' => 'Unpack and load from chrome://extensions in Developer mode.',
        'instructions' => 'Open chrome://extensions, enable Developer mode, extract the ZIP and select Load unpacked. Choose the HaloBlock folder.'
    ],
    'firefox' => [
        'name' => 'Mozilla Firefox', 'short' => 'Firefox', 'icon' => 'firefox.svg', 'color' => 'firefox',
        'file' => 'HaloBlock-Firefox-v4.4-unsigned.zip', 'category' => 'Unsigned testing build',
        'note' => 'Temporary testing using about:debugging. Not store-signed.',
        'instructions' => 'Open about:debugging, select This Firefox, choose Load Temporary Add-on, and select manifest.json from the extracted extension.'
    ],
    'edge' => [
        'name' => 'Microsoft Edge', 'short' => 'Edge', 'icon' => 'edge.svg', 'color' => 'edge',
        'file' => 'HaloBlock-Edge-v4.4.zip', 'category' => 'Developer build',
        'note' => 'Unpack and load from edge://extensions in Developer mode.',
        'instructions' => 'Open edge://extensions, turn on Developer mode, extract the ZIP and choose Load unpacked.'
    ],
    'opera' => [
        'name' => 'Opera', 'short' => 'Opera', 'icon' => 'opera.svg', 'color' => 'opera',
        'file' => 'HaloBlock-Opera-v4.4.zip', 'category' => 'Developer build',
        'note' => 'Unpack and load from opera://extensions in Developer mode.',
        'instructions' => 'Open opera://extensions, enable Developer mode, then choose Load unpacked using the extracted extension directory.'
    ],
    'safari' => [
        'name' => 'Apple Safari', 'short' => 'Safari', 'icon' => 'safari.svg', 'color' => 'safari',
        'file' => 'HaloBlock-Safari-v4.4-SOURCE.zip', 'category' => 'Source only',
        'note' => 'Requires conversion, Xcode, testing and Apple signing.',
        'instructions' => 'Extract the Safari source on a Mac and follow BUILD_ON_MAC.txt. Build and sign a Safari Web Extension wrapper. This ZIP cannot be installed as a finished Safari extension.'
    ],
    'android' => [
        'name' => 'Firefox for Android', 'short' => 'Android', 'icon' => 'firefox-android.svg', 'color' => 'android',
        'file' => 'HaloBlock-Android-Firefox-v4.4-guide.zip', 'category' => 'Development guide',
        'note' => 'Instructions only; no signed Android add-on or APK.',
        'instructions' => 'A Firefox Android build still needs device testing and Mozilla signing. This download is a developer guide, not an installable app.'
    ],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function active(string $target, string $page): string
{
    return $target === $page ? ' active' : '';
}

function platform(string $key): array
{
    return PLATFORMS[$key] ?? [];
}

/** Browser brands are bundled local SVGs, not runtime/CDN dependencies. */
function browser_icon(string $platformKey, string $extraClass = ''): string
{
    $platform = platform($platformKey);
    if (!$platform || !isset($platform['icon'])) {
        return '';
    }
    $classes = 'browser-icon ' . $platform['color'];
    if ($extraClass !== '') {
        $classes .= ' ' . $extraClass;
    }
    return '<span class="' . e($classes) . '" aria-hidden="true"><img src="assets/img/browser-icons/'
        . e($platform['icon']) . '" alt="" width="42" height="42" loading="lazy" decoding="async"></span>';
}

function svg_icon(string $name, int $size = 20): string
{
    $paths = [
        'arrow' => '<path d="M5 12h14m-6-6 6 6-6 6"/>',
        'arrow-up' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'download' => '<path d="M12 3v12m-4-4 4 4 4-4"/><path d="M5 17v3h14v-3"/>',
        'shield' => '<path d="m12 22 7-4V6l-7-3-7 3v12l7 4Z"/><path d="m9 12 2 2 4-4"/>',
        'eye-off' => '<path d="M3 3 21 21M10.6 10.6A2 2 0 0 0 13.4 13.4"/><path d="M6.2 6.3C3.8 7.7 2 10 1 12c2 4 6.2 7 11 7 1.7 0 3.3-.4 4.8-1.2M9 5.3A12 12 0 0 1 12 5c4.8 0 9 3 11 7-.7 1.5-1.8 2.9-3.1 4"/>',
        'globe' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c-3 3-3 15 0 18M12 3c3 3 3 15 0 18"/>',
        'sparkle' => '<path d="m12 2 1.8 6.2L20 10l-6.2 1.8L12 18l-1.8-6.2L4 10l6.2-1.8L12 2ZM20 18l.6 1.4L22 20l-1.4.6L20 22l-.6-1.4L18 20l1.4-.6L20 18Z"/>',
        'layers' => '<path d="m12 2 9 5-9 5-9-5 9-5ZM3 12l9 5 9-5M3 17l9 5 9-5"/>',
        'zap' => '<path d="M13 2 4 13h7l-1 9 10-12h-7V2Z"/>',
        'settings' => '<path d="M12 8v8M8 12h8"/><circle cx="12" cy="12" r="9"/>',
        'check' => '<path d="m5 12 5 5L20 7"/>',
        'chevron' => '<path d="m6 9 6 6 6-6"/>',
        'lock' => '<rect x="5" y="10" width="14" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/>',
        'menu' => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'book' => '<path d="M3 5a2 2 0 0 1 2-2h14v18H5a2 2 0 0 0-2 2V5ZM3 18a3 3 0 0 1 3-3h13"/>',
        'info' => '<circle cx="12" cy="12" r="9"/><path d="M12 11v5m0-9h.01"/>',
    ];
    $body = $paths[$name] ?? $paths['check'];
    return '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $body . '</svg>';
}
