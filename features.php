<?php
$page = 'features';
$title = 'Features — HaloBlock';
$description = 'Discover HaloBlock network ad filtering, tracker protection, pop-up controls, cosmetic filtering and privacy settings.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero"><div class="container"><div class="page-header-block" data-reveal><div class="section-kicker">WHY HALOBLOCK</div><h1>Less noise.<br><span class="gradient-text">More browsing.</span></h1><p>Simple controls, powerful building blocks, and a thoughtful interface help you enjoy a calmer web.</p></div></div></section>
<section class="section pt-2"><div class="container"><div class="row g-4">
  <?php
  $features = [
    ['eye-off','fi-purple','Network ad filtering','Filters many known advertising requests using built-in and subscription rules. Filter support varies by browser.'],
    ['shield','fi-cyan','Tracker protection','Helps stop requests to known tracking domains using privacy-oriented filter subscriptions.'],
    ['layers','fi-blue','Page cleanup','Cosmetic filtering hides many common ad banners, ad spaces and leftover page clutter.'],
    ['globe','fi-peach','Popup protection','Includes configurable tools to limit scripted popups, overlays and recognized advertising destinations.'],
    ['sparkle','fi-purple','Cookie consent assistance','Attempts to reject nonessential cookies on supported consent interfaces. Not all banners are recognized.'],
    ['settings','fi-cyan','Controls that make sense','Quick popup switches, per-site exceptions, custom domain management and filter update settings.'],
  ];
  foreach ($features as $f): ?>
  <div class="col-md-6 col-lg-4" data-reveal><article class="detail-feature"><span class="feature-icon <?= e($f[1]) ?>"><?= svg_icon($f[0], 26) ?></span><h2><?= e($f[2]) ?></h2><p><?= e($f[3]) ?></p></article></div>
  <?php endforeach; ?>
</div></div></section>
<section class="feature-detail-band"><div class="container"><div class="row align-items-center gy-5 gx-lg-5"><div class="col-lg-6" data-reveal><div class="section-kicker">DESIGNED FOR CLARITY</div><h2>A dashboard that<br>gets out of your way.</h2><p>Quick-access switches are easy to find. More detailed options live on a separate settings page, so the popup stays focused.</p><a href="downloads.php" class="btn btn-halo btn-halo-lg mt-3">Try HaloBlock <?= svg_icon('arrow', 19) ?></a></div><div class="col-lg-6" data-reveal><div class="dashboard-preview"><img src="assets/img/settings-dashboard.png" alt="HaloBlock settings dashboard preview" loading="lazy" width="680" height="1080"><span class="preview-footnote">Settings UI preview</span></div></div></div></div></section>
<section class="container mt-5 pb-5"><div class="notice-lite"><?= svg_icon('info', 18) ?><span><strong>About video advertisements:</strong> YouTube, Shorts, Spotify and streaming sites may use techniques this experimental extension cannot always filter. We don't promise Premium-like ad-free playback.</span></div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
