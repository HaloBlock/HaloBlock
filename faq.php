<?php
$page = 'faq';
$title = 'Help Center & FAQs — HaloBlock';
$description = 'How to install HaloBlock, update filters, troubleshoot websites and understand cross-browser compatibility.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero faq-page-hero"><div class="container"><div class="page-header-block" data-reveal><div class="section-kicker">WE'RE HERE TO HELP</div><h1>Good questions.<br><span class="gradient-text">Clear answers.</span></h1><p>Get HaloBlock set up and find out what to expect from the current developer preview.</p></div></div></section>
<section class="section pt-2"><div class="container"><div class="row gx-lg-5 gy-5"><div class="col-lg-4"><div class="help-sidebar"><div class="help-sidebar-icon"><?= svg_icon('book', 25) ?></div><h2>Let's get you started.</h2><p>Find your browser below, unpack the development build, and follow the setup guide.</p><a href="downloads.php" class="btn btn-halo btn-halo-lg">View downloads <?= svg_icon('arrow', 18) ?></a></div></div>
<div class="col-lg-8">
  <h2 class="faq-heading" id="installation">Installation guides</h2>
  <div class="accordion halo-accordion" id="installAccordion">
  <?php foreach (PLATFORMS as $key => $p): ?>
  <div class="accordion-item"><h3 class="accordion-header" id="question-<?= e($key) ?>"><button class="accordion-button<?= $key !== 'chrome' ? ' collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#answer-<?= e($key) ?>" aria-expanded="<?= $key === 'chrome' ? 'true' : 'false' ?>" aria-controls="answer-<?= e($key) ?>"><?= browser_icon($key, 'browser-icon-small') ?> <?= e($p['name']) ?></button></h3><div id="answer-<?= e($key) ?>" class="accordion-collapse collapse<?= $key === 'chrome' ? ' show' : '' ?>" data-bs-parent="#installAccordion"><div class="accordion-body"><?= e($p['instructions']) ?><div class="mt-3"><a href="download.php?platform=<?= e($key) ?>" class="text-action">Get the <?= e($p['short']) ?> package <?= svg_icon('arrow', 17) ?></a></div></div></div></div>
  <?php endforeach; ?>
  </div>
  <h2 class="faq-heading mt-5">Frequently asked questions</h2>
  <div class="accordion halo-accordion" id="faqAccordion">
  <?php
  $faqs = [
    ['Is HaloBlock free?', 'The developer preview packages provided here are available to download at no cost.'],
    ['Will HaloBlock block every ad, including YouTube?', 'No ad-blocking extension can guarantee removing every advertisement without compatibility issues. YouTube video ads, Shorts ads and other first-party player ads may still appear in this experimental version.'],
    ['Can I install the Firefox ZIP normally?', 'The Firefox build is unsigned. For local desktop tests, load it temporarily using about:debugging. Permanent installation generally requires signing and distribution through Mozilla.'],
    ['Is there an iPhone, Safari or Android app?', 'Not yet. Safari is a source package needing Apple conversion and signing. The Android download is a guide for future Firefox Android support, not an APK.'],
    ['How do I update ad-blocking filters?', 'Open the HaloBlock popup, go to its settings page, then choose Update filter lists now. The extension needs internet access for subscriptions.'],
    ['What if a website stops working?', 'Try pausing protection for that website from the popup, reload the page, and adjust strict popup protection if needed.'],
    ['Are browser store versions available?', 'No. HaloBlock v4.4 is an independent developer preview with unpacked, unsigned or source-only downloads.'],
  ];
  foreach ($faqs as $i => $q): ?>
  <div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-<?= $i ?>" aria-expanded="false" aria-controls="faq-<?= $i ?>"><?= e($q[0]) ?></button></h3><div id="faq-<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body"><?= e($q[1]) ?></div></div></div>
  <?php endforeach; ?>
  </div>
</div></div></div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
