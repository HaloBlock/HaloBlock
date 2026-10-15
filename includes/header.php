<?php
require_once __DIR__ . '/config.php';
$page = $page ?? 'home';
$title = $title ?? 'HaloBlock — A cleaner web, automatically.';
$description = $description ?? 'Explore HaloBlock, an experimental cross-browser ad and tracker blocker. Developer previews for Chrome, Firefox, Edge and Opera.';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= e($description) ?>">
  <meta name="theme-color" content="#070b17">
  <title><?= e($title) ?></title>
  <meta name="color-scheme" content="dark">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<a href="#main-content" class="skip-link">Skip to content</a>
<header class="site-header">
  <nav class="navbar navbar-expand-lg py-0" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand brand" href="index.php" aria-label="HaloBlock home">
        <span class="brand-logo"><img src="assets/img/haloblock-logo.svg" alt="" width="34" height="34"></span>
        <span>Halo<span class="brand-emphasis">Block</span><small>AD BLOCKER</small></span>
      </a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <?= svg_icon('menu', 25) ?>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link<?= active('home', $page) ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link<?= active('features', $page) ?>" href="features.php">Features</a></li>
          <li class="nav-item"><a class="nav-link<?= active('downloads', $page) ?>" href="downloads.php">Browsers</a></li>
          <li class="nav-item"><a class="nav-link<?= active('faq', $page) ?>" href="faq.php">Help center</a></li>
        </ul>
        <a href="downloads.php" class="btn btn-halo btn-nav">Get HaloBlock <?= svg_icon('arrow-up', 16) ?></a>
      </div>
    </div>
  </nav>
</header>
<main id="main-content">
