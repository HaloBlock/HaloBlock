<?php
$page = 'downloads';
$title = 'Downloads — HaloBlock for your browser';
$description = 'HaloBlock developer packages for Chrome, Edge, Opera and Firefox, plus Safari source and Android guidance.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero downloads-page-hero"><div class="container"><div class="page-header-block" data-reveal><div class="section-kicker">CHOOSE YOUR BROWSER</div><h1>Pick your platform.<br><span class="gradient-text">Browse your way.</span></h1><p>Grab a developer package for your browser. HaloBlock is currently distributed as a preview—not through official extension stores.</p></div></div></section>
<section class="section pt-2" id="compatibility"><div class="container"><div class="row g-4">
<?php foreach (PLATFORMS as $key => $p): ?>
<div class="col-md-6 col-xl-4" id="<?= e($key) ?>" data-reveal><article class="platform-card h-100">
  <div class="platform-top d-flex align-items-center gap-3"><?= browser_icon($key, 'platform-logo') ?><div><h2><?= e($p['name']) ?></h2><span class="platform-build-label"><?= e($p['category']) ?></span></div></div>
  <p><?= e($p['note']) ?></p>
  <div class="platform-bottom"><a class="btn btn-platform" href="download.php?platform=<?= e($key) ?>"><?= svg_icon('download', 18) ?> Download <?= $key === 'safari' ? 'source' : ($key === 'android' ? 'guide' : 'ZIP') ?></a><a class="platform-install-link" href="faq.php#installation">Install guide <?= svg_icon('arrow-up', 15) ?></a></div>
</article></div>
<?php endforeach; ?>
</div>
<div class="bundle-banner mt-5" data-reveal><div><span class="bundle-icon"><?= svg_icon('layers', 25) ?></span><h3>Need all packages together?</h3><p>Get the v4.4 developer bundle with source packages and documentation in one download.</p></div><a href="download.php?platform=all" class="btn btn-bundle">Download full bundle <?= svg_icon('download', 18) ?></a></div>
<div class="notice-lite mt-4"><?= svg_icon('info', 19) ?><span>Firefox builds are unsigned. Safari is source-only. The Android download contains guidance, not an installable app. Chrome Android is not supported via desktop extension loading. <a href="faq.php">See installation help</a>.</span></div>
</div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
