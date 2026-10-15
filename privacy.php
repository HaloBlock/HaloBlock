<?php
$page = 'privacy';
$title = 'Privacy — HaloBlock';
$description = 'Learn how the HaloBlock project website is set up and review privacy considerations for the experimental extension.';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero faq-page-hero"><div class="container"><div class="page-header-block"><div class="section-kicker">PRIVACY INFORMATION</div><h1>Privacy deserves<br><span class="gradient-text">plain language.</span></h1><p>A quick explanation of what this demonstration website does and what to check before publishing HaloBlock publicly.</p></div></div></section>
<section class="section pt-2"><div class="container"><article class="privacy-article mx-auto">
<h2>This website</h2><p>The included website source does not implement user accounts, visitor analytics, advertising pixels, marketing cookies or a contact form. Bootstrap, JavaScript, fonts and images are served from the included project files. The host that you choose can still keep normal web-server access logs. Review your hosting provider's logging and retention settings before publishing.</p>
<h2>Downloads</h2><p>Downloads are served directly from the HaloBlock website's local ZIP files. The PHP handler validates against an allowlist of filenames and does not create an individual download profile.</p>
<h2>About the browser extension</h2><p>HaloBlock's extension includes browser storage for settings and functions that can download public third-party filter subscriptions. Filter list hosts may receive ordinary network request data such as IP address when lists are fetched. Ad blocking activity and capabilities depend on the browser and selected permissions.</p>
<h2>Public release checklist</h2><p>This is an editable project starting point, <strong>not a substitute for a reviewed privacy policy</strong>. Before publishing it, audit the final extension's data access, third-party subscription URLs, security permissions and deployment infrastructure. Update this policy to match those verified behaviors, your actual contact details, legal requirements and hosting configuration.</p>
<h2>Need more information?</h2><p>Read the <a href="faq.php">Help Center</a> and the <code>README.md</code> included with the website package.</p>
</article></div></section>
<?php include __DIR__ . '/includes/footer.php'; ?>
