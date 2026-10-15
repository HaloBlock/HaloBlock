# HaloBlock Website (PHP + Bootstrap 5)

A responsive, deployable PHP marketing website for the HaloBlock experimental browser extension.

## What's inside

- `index.php` — landing page, product preview, features and calls to action
- `features.php` — detailed feature breakdown and settings preview
- `downloads.php` — browser-specific cards and download links
- `download.php` — PHP download handler using a strict platform allowlist
- `faq.php` — installation instructions and interactive FAQs
- `privacy.php` — editable starter privacy information
- `includes/` — reusable PHP layout and configuration
- `assets/` — HaloBlock logo, screenshots, custom CSS/JS and **locally bundled Bootstrap 5.3.6**
- `downloads/` — actual HaloBlock v4.4 development packages

## Requirements

- PHP 8.0+ (uses `str_starts_with`)
- Any PHP-capable web server (Apache, Nginx+PHP-FPM, or PHP's built-in server for local testing)
- No database, Composer installation or build step necessary

## Test locally

```bash
cd HaloBlock-Website
php -S 127.0.0.1:8000
```

Open http://127.0.0.1:8000 and try downloading a package from the Browsers page.

## Deploy to shared hosting

1. Upload the contents of `HaloBlock-Website` to the PHP-enabled web root (`public_html` on many hosts).
2. Verify PHP is enabled and the `downloads` folder is readable by the web server.
3. Visit `index.php`, `downloads.php`, `features.php`, `faq.php`, and `privacy.php`.
4. Test download responses. Check that the `Content-Type` is `application/zip`.
5. Edit site copy in the PHP files and version/platform labels in `includes/config.php` before publishing.
6. Replace or review the privacy page for your actual hosting setup and final release. Enable HTTPS and configure web server logs as appropriate.

## Important release notes

- These are **developer previews**, not extensions listed in official browser stores.
- Chrome / Edge / Opera ZIPs are intended for **Load unpacked**.
- Firefox is **unsigned** and intended for **temporary testing**.
- Safari is **conversion-ready source**, not a signed Safari app.
- Android package is **instructions only**, not an installable APK/add-on.
- Blocking of all ads, especially YouTube or Spotify video/audio ads, is **not guaranteed**.
- Screenshots use example/simulated data and should not be treated as measured blocking statistics.
- This website does not implement login, personal tracking, contact emails, billing or real-time ad detection.

## Branding

The logo is taken from the current HaloBlock v4.4 extension. Browser platform icons are **locally bundled recognizable brand-mark vectors**, based on Font Awesome Free brand icons and colorized for HaloBlock. Trademark ownership remains with the relevant browser vendors; see `ASSET-LICENSES.md`. The Android download is Firefox-for-Android guidance and shows a combined Firefox/Android badge.

## Browser icon attribution

See `ASSET-LICENSES.md` for the source, license, modifications and trademark information for each browser icon.

## Bootstrap attribution

Bootstrap 5.3.6 CSS and JS are bundled locally and are licensed under the MIT License, Copyright 2011–2025 The Bootstrap Authors. See https://github.com/twbs/bootstrap/blob/main/LICENSE.

## Midnight Edition (website v2.0)

Redesigned dark futuristic interface with responsive Bootstrap 5 pages, CSS-only animated glows/orbits, on-scroll entrance effects, browser mockups, hover spotlights, an interactive *illustrative* ad-comparison toggle, reduced-motion handling and a scroll progress bar. JavaScript enhancements do not affect PHP downloads or core navigation. The website does not claim that its illustrations or sample interfaces represent measured blocking performance.

All original PHP pages, browser-icon SVG files, developer ZIP archives and allowlisted `download.php` delivery routes are retained. Browser packages remain v4.4 developer/pre-release files. Safari is source-only, Firefox unsigned, Android is a development guide.
