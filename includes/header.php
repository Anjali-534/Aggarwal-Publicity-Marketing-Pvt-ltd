<?php
$base = APM_CONFIG['base_url'];
$pg   = $page ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0B1F3A">
<meta name="description" content="Aggarwal Publicity Marketing Pvt. Ltd. – Premier manufacturer of Paraformaldehyde, Spray Chemicals, Melamine and Phthalic Acid. ISO certified, Delhi India.">
<title><?php echo isset($page_title) ? apm_title($page_title) : apm_title(); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:ital,wght@0,300;0,400;0,600;0,700;1,300&family=Barlow+Condensed:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo apm_asset('css/main.css'); ?>?v=<?php echo APM_VERSION; ?>">
</head>
<body>

<header id="site-header">
  <div class="container">
    <div class="header-inner">
      <a href="<?php echo $base; ?>/" class="site-logo" aria-label="APM Chemical – Home">
        <img src="<?php echo apm_asset('images/logo.jpg'); ?>" alt="APM Chemical" style="height:46px;width:auto;">
        <div class="logo-text">
          <strong>Aggarwal Publicity Marketing</strong>
          <small>Pvt. Ltd. &mdash; Chemical Manufacturers</small>
        </div>
      </a>

      <nav id="site-nav" aria-label="Primary Navigation">
        <ul class="nav-menu">
          <li<?php echo apm_active('/'); ?>><a href="<?php echo $base; ?>/">Home</a></li>
          <li<?php echo apm_active('/about'); ?>><a href="<?php echo $base; ?>/about">About Us</a></li>
          <li class="has-dropdown<?php echo (strpos($path,'/products')===0)?' current-menu-parent':''; ?>">
            <a href="<?php echo $base; ?>/products">Products</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $base; ?>/products/paraformaldehyde91">Paraformaldehyde 91%</a></li>
              <li><a href="<?php echo $base; ?>/products/paraformaldehyde96">Paraformaldehyde 96%</a></li>
              <li><a href="<?php echo $base; ?>/products/spray-chemicals">Spray Chemicals</a></li>
              <li><a href="<?php echo $base; ?>/products/melamine">Melamine</a></li>
              <li><a href="<?php echo $base; ?>/products/phthalic-acid">Phthalic Acid</a></li>
            </ul>
          </li>
          <li<?php echo apm_active('/gallery'); ?>><a href="<?php echo $base; ?>/gallery">Gallery</a></li>
          <li<?php echo apm_active('/quality-certifications'); ?>><a href="<?php echo $base; ?>/quality-certifications">Quality</a></li>
          <li<?php echo apm_active('/news'); ?>><a href="<?php echo $base; ?>/news">News &amp; Blog</a></li>
          <li class="nav-cta"><a href="<?php echo $base; ?>/contact">Contact Us</a></li>
        </ul>
      </nav>

      <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile Navigation">
  <a href="<?php echo $base; ?>/">Home</a>
  <a href="<?php echo $base; ?>/about">About Us</a>
  <a href="<?php echo $base; ?>/products">Products</a>
  <div class="mobile-sub">
    <a href="<?php echo $base; ?>/products/paraformaldehyde91">→ Paraformaldehyde</a>
    <a href="<?php echo $base; ?>/products/paraformaldehyde96">→ Paraformaldehyde</a>
    <a href="<?php echo $base; ?>/products/spray-chemicals">→ Spray Chemicals</a>
    <a href="<?php echo $base; ?>/products/melamine">→ Melamine</a>
    <a href="<?php echo $base; ?>/products/phthalic-acid">→ Phthalic Acid</a>
  </div>
  <a href="<?php echo $base; ?>/gallery">Gallery</a>
  <a href="<?php echo $base; ?>/quality-certifications">Quality &amp; Certifications</a>
  <a href="<?php echo $base; ?>/news">News &amp; Blog</a>
  <div class="mobile-cta"><a href="<?php echo $base; ?>/contact">Contact Us</a></div>
</nav>
