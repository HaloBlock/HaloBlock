</main>
<footer class="site-footer">
  <div class="container">
    <div class="row gy-4 footer-upper">
      <div class="col-lg-5">
        <a class="brand footer-brand" href="index.php">
          <span class="brand-logo"><img src="assets/img/haloblock-logo.svg" width="34" height="34" alt=""></span>
          <span>Halo<span class="brand-emphasis">Block</span><small>AD BLOCKER</small></span>
        </a>
        <p class="footer-copy">A quieter, cleaner way to browse. Built for people who want fewer distractions and more control.</p>
        <span class="footer-dev-label">Independent extension project · v<?= e(VERSION) ?> developer preview</span>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1">
        <h3 class="footer-heading">Explore</h3>
        <a href="features.php">Features</a>
        <a href="downloads.php">Download</a>
        <a href="faq.php">FAQs</a>
      </div>
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading">Resources</h3>
        <a href="faq.php#installation">Installation</a>
        <a href="privacy.php">Privacy</a>
        <a href="downloads.php#compatibility">Compatibility</a>
      </div>
      <div class="col-lg-2">
        <h3 class="footer-heading">Current release</h3>
        <span class="footer-version">Version <?= e(VERSION) ?></span>
        <p class="footer-detail">Testing builds. Not published in browser stores.</p>
      </div>
    </div>
    <div class="footer-bottom d-flex gap-3 justify-content-between align-items-center flex-wrap">
      <span>© <?= date('Y') ?> HaloBlock. Project website.</span>
      <span>Made for a more peaceful web <span aria-hidden="true">✦</span></span>
    </div>
  </div>
</footer>
<script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
