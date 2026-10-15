<?php
$page = 'home';
$title = 'HaloBlock — Browse the web. Not the noise.';
$description = 'HaloBlock is an experimental browser extension for filtering ads, limiting trackers and giving you more control. Explore developer builds for major browsers.';
include __DIR__ . '/includes/header.php';
?>
<section class="hero-section" id="top">
  <div class="hero-grid" aria-hidden="true"></div>
  <div class="hero-aurora aurora-one" aria-hidden="true"></div><div class="hero-aurora aurora-two" aria-hidden="true"></div>
  <div class="star-field" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
  <div class="container hero-container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 hero-content" data-reveal>
        <a class="eyebrow" href="downloads.php"><span class="pulse-dot"></span> INTRODUCING HALOBLOCK <span class="eyebrow-trail"><?= svg_icon('arrow', 13) ?></span></a>
        <h1>Browse the web.<br><span class="gradient-text">Not the noise.</span></h1>
        <p class="hero-description">More of what matters. Less of what doesn't. Meet the beautifully simple browser extension that helps filter ads, reduce tracking and bring calm back to every tab.</p>
        <div class="hero-actions d-flex flex-wrap gap-3">
          <a class="btn btn-halo btn-halo-lg" href="downloads.php">Explore downloads <?= svg_icon('arrow-up', 18) ?></a>
          <a class="btn btn-soft btn-halo-lg" href="#interactive-demo"><span class="play-dot">▶</span> See the difference</a>
        </div>
        <div class="hero-trust d-flex flex-wrap align-items-center gap-3 gap-xl-4">
          <span><?= svg_icon('check', 15) ?> Free developer preview</span>
          <span><?= svg_icon('check', 15) ?> Privacy-first controls</span>
          <span><?= svg_icon('check', 15) ?> No account needed</span>
        </div>
        <div class="hero-build-note"><span class="build-pip"></span> IN DEVELOPMENT <span class="build-note-divider">/</span> BROWSER EXTENSION V<?= e(VERSION) ?></div>
      </div>
      <div class="col-lg-6" data-reveal>
        <div class="hero-stage hero-stage-artwork" id="heroStage" aria-label="Preview of the HaloBlock extension interface in a browser scene">
          <div class="stage-orbit orbit-a"></div><div class="stage-orbit orbit-b"></div>
          <div class="stage-orb" aria-hidden="true"></div>
          <div class="hero-art-tag hero-art-tag-top"><span class="hero-art-tag-icon cyan"><?= svg_icon('sparkle', 16) ?></span><span>Real HaloBlock-inspired extension design</span></div>
          <div class="hero-art-card spotlight-card">
            <div class="hero-art-card-top"><span class="window-dots"><i></i><i></i><i></i></span><span class="hero-art-url"><span class="url-lock"><?= svg_icon('lock', 12) ?></span> haloblock.site</span><span class="hero-art-menu">•••</span></div>
            <div class="hero-art-image-wrap">
              <img src="assets/img/haloblock-hero-ui-reference.png" alt="HaloBlock extension interface concept displayed over a browser page" class="hero-art-image" width="728" height="568">
              <div class="hero-art-glow"></div>
            </div>
          </div>
          <div class="hero-mini-panel">
            <div class="hero-mini-header"><img src="assets/img/haloblock-logo.svg" width="18" height="18" alt=""><span>Hero showcase</span></div>
            <div class="hero-mini-copy">Now featuring your actual extension-style visual instead of the generic concept artwork.</div>
            <div class="hero-mini-metrics"><span><strong>Dark UI</strong><small>Branded</small></span><span><strong>Popup</strong><small>Visible</small></span><span><strong>Motion</strong><small>Enabled</small></span></div>
          </div>
          <div class="float-chip float-chip-top"><span class="float-icon cyan"><?= svg_icon('sparkle', 16) ?></span><span>Browsing, simplified</span></div>
          <div class="float-chip float-chip-bottom"><span class="float-icon purple"><?= svg_icon('shield', 16) ?></span><span>Your web. Your rules.</span></div>
        </div>
      </div>
    </div>
    <a class="hero-scroll" href="#browsers" aria-label="Scroll to browser compatibility"><span class="scroll-line"></span> SCROLL TO EXPLORE</a>
  </div>
</section>

<section class="browser-ribbon" id="browsers" aria-label="Browser development packages">
  <div class="container">
    <div class="browser-ribbon-inner"><div class="browser-ribbon-intro"><span class="ribbon-pretitle">ONE MISSION. MANY BROWSERS.</span><span class="ribbon-title">Choose your browser</span></div>
      <div class="browser-quick-list">
        <?php foreach (['chrome','firefox','edge','opera','safari','android'] as $key): $p = platform($key); ?>
        <a href="downloads.php#<?= e($key) ?>" class="browser-quick" title="<?= e($p['name']) ?> — <?= e($p['category']) ?>"><?= browser_icon($key) ?><span><?= e($p['short']) ?></span></a>
        <?php endforeach; ?>
      </div>
      <a class="ribbon-link" href="downloads.php">All builds <?= svg_icon('arrow-up', 16) ?></a>
    </div>
  </div>
</section>

<section class="section section-features" id="features">
 <div class="container">
   <div class="section-top d-flex justify-content-between align-items-end flex-wrap gap-4" data-reveal><div><div class="section-kicker"><span class="kicker-bar"></span> THOUGHTFULLY BUILT</div><h2>Powerful protection.<br><span class="text-muted-custom">Beautifully simple.</span></h2></div><p>Essential tools, refined into an experience you'll actually enjoy using. Privacy shouldn't feel complicated.</p></div>
   <div class="row g-4">
     <div class="col-lg-6" data-reveal><article class="bento-card bento-primary spotlight-card"><div class="bento-copy"><span class="feature-tag">01 / THE ESSENTIALS</span><span class="feature-icon fi-purple"><?= svg_icon('eye-off', 25) ?></span><h3>Less noise.<br>More of the good stuff.</h3><p>Filter many familiar advertising requests and clean up unwanted ad spaces as you browse.</p></div><div class="bento-graphic ad-graphic" aria-hidden="true"><div class="ad-mini-head"><span></span><span></span><span></span></div><div class="ad-mini-row"><i class="ad-badge ad-badge-one">AD</i><span></span></div><div class="ad-mini-row"><i class="ad-badge ad-badge-two">AD</i><span></span></div><div class="ad-mini-row"><i class="ad-check"><?= svg_icon('check', 20) ?></i><span></span></div><div class="ad-graphic-glow"></div></div></article></div>
     <div class="col-lg-3 col-md-6" data-reveal><article class="bento-card bento-secondary spotlight-card"><span class="feature-tag">02 / PRIVACY</span><span class="feature-icon fi-cyan"><?= svg_icon('shield', 25) ?></span><div class="mini-orbit-graphic"><span class="mini-orbit-ring"></span><span class="mini-orbit-center"><?= svg_icon('lock', 26) ?></span><i class="orbit-node node1"></i><i class="orbit-node node2"></i><i class="orbit-node node3"></i></div><h3>Tracker defense</h3><p>Help limit requests to known tracking networks.</p></article></div>
     <div class="col-lg-3 col-md-6" data-reveal><article class="bento-card bento-secondary spotlight-card"><span class="feature-tag">03 / CONTROL</span><span class="feature-icon fi-blue"><?= svg_icon('settings', 25) ?></span><div class="toggle-graphic"><div><span>Ad filtering</span><i></i></div><div><span>Popup controls</span><i></i></div><div><span>Site exceptions</span><i class="off"></i></div></div><h3>In your hands</h3><p>Fine-tune the experience for every website.</p></article></div>
   </div>
   <div class="row g-4 mt-0">
     <div class="col-md-4" data-reveal><article class="feature-strip-card spotlight-card"><span class="feature-icon fi-purple"><?= svg_icon('layers', 22) ?></span><div><h3>Cleaner pages</h3><p>Remove many familiar visual ad placeholders.</p></div><span class="strip-arrow"><?= svg_icon('arrow-up', 16) ?></span></article></div>
     <div class="col-md-4" data-reveal><article class="feature-strip-card spotlight-card"><span class="feature-icon fi-cyan"><?= svg_icon('globe', 22) ?></span><div><h3>Popup controls</h3><p>Reduce scripted advertising windows and overlays.</p></div><span class="strip-arrow"><?= svg_icon('arrow-up', 16) ?></span></article></div>
     <div class="col-md-4" data-reveal><article class="feature-strip-card spotlight-card"><span class="feature-icon fi-peach"><?= svg_icon('sparkle', 22) ?></span><div><h3>Smarter consent</h3><p>Assist with selected nonessential cookie prompts.</p></div><span class="strip-arrow"><?= svg_icon('arrow-up', 16) ?></span></article></div>
   </div>
 </div>
</section>

<section class="comparison-section" id="interactive-demo">
 <div class="container"><div class="row align-items-center gy-5 gx-xl-5">
  <div class="col-lg-5" data-reveal><div class="section-kicker"><span class="kicker-bar"></span> SEE THE DIFFERENCE</div><h2>From cluttered<br><span class="gradient-text">to clear.</span></h2><p class="showcase-lead">A calmer web is easier to imagine than explain. Try the interactive demo to see how visual clutter can change the browsing experience.</p><div class="comparison-controls" role="group" aria-label="Illustrative ad filtering mode"><button class="compare-mode" id="modeBefore" type="button" aria-pressed="false">Ads visible</button><button class="compare-mode active" id="modeAfter" type="button" aria-pressed="true">HaloBlock on <span class="tiny-led"></span></button></div><p class="demo-disclaimer">Illustrative example only — not a live website test.</p><a class="text-action" href="features.php">Explore all features <?= svg_icon('arrow', 18) ?></a></div>
  <div class="col-lg-7" data-reveal><div class="comparison-scene spotlight-card is-clean" id="comparisonScene"><div class="demo-browser-top"><span class="window-dots"><i></i><i></i><i></i></span><div class="demo-url">example-website.com / discover</div><span class="demo-blocker"><img src="assets/img/haloblock-logo.svg" width="19" height="19" alt=""> <span class="demo-blocker-label">ACTIVE</span></span></div><div class="demo-page"><div class="demo-site-nav"><strong>form&function<span>.</span></strong><span>Stories</span><span>Inspiration</span><span>Discover</span></div><div class="demo-site-content"><div class="demo-main-story"><div class="demo-story-photo"><span>EXPLORE WHAT'S POSSIBLE</span><strong>A different<br>perspective.</strong></div><div class="demo-story-heading"></div><div class="demo-story-text"></div><div class="demo-story-text short"></div></div><div class="demo-ads-side"><div class="demo-ad ad1">DISPLAY AD <span>✕</span></div><div class="demo-ad ad2">SPONSORED <span>✕</span></div><div class="demo-empty-note"><span><?= svg_icon('check', 22) ?></span> Less clutter.<br>More focus.</div></div></div><div class="demo-bottom-ad">ADVERTISING BANNER <span>✕</span></div></div><div class="comparison-gloss"></div></div></div>
 </div></div>
</section>

<section class="section steps-section"><div class="container"><div class="text-center mb-5" data-reveal><div class="section-kicker justify-content-center"><span class="kicker-bar"></span> GET STARTED</div><h2>Three steps to <span class="gradient-text">less noise.</span></h2><p class="section-description mx-auto">The simplest way to start is to pick a browser and install the developer build.</p></div><div class="row g-4">
<div class="col-md-4" data-reveal><article class="step-card"><span class="step-num">01</span><span class="step-icon"><?= svg_icon('download', 25) ?></span><h3>Choose your browser</h3><p>Select the appropriate package from our browser downloads.</p></article></div>
<div class="col-md-4" data-reveal><article class="step-card"><span class="step-num">02</span><span class="step-icon"><?= svg_icon('settings', 25) ?></span><h3>Install the preview</h3><p>Follow the setup guide for your browser and enable the extension.</p></article></div>
<div class="col-md-4" data-reveal><article class="step-card"><span class="step-num">03</span><span class="step-icon"><?= svg_icon('sparkle', 25) ?></span><h3>Make the web yours</h3><p>Update filter lists, customize settings, and browse on your terms.</p></article></div>
</div></div></section>

<section class="container cta-wrap"><div class="cta-panel spotlight-card" data-reveal><div class="cta-sheen"></div><div class="cta-orb"></div><div class="row align-items-center gy-4 position-relative"><div class="col-lg-8"><div class="cta-label"><span class="pulse-dot"></span> YOUR WEB, REIMAGINED</div><h2>Ready for a<br><span class="gradient-text">cleaner kind of browsing?</span></h2><p>Say goodbye to unnecessary clutter. Say hello to more control.</p></div><div class="col-lg-4 text-lg-end"><a class="btn btn-white-large" href="downloads.php">Get HaloBlock <?= svg_icon('arrow-up', 20) ?></a><span class="cta-subtext">Free developer preview · No sign-up</span></div></div></div>
<div class="notice-lite mb-5"><?= svg_icon('info', 18) ?><span>HaloBlock is an experimental extension. Some ads, including video ads, may remain. Browser downloads are developer packages, not published store releases.</span></div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
