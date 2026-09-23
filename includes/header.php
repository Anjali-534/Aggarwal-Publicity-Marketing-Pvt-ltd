<?php
$base = APM_BASE_URL;
$pg   = $page ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#ffffff">
<meta name="google-site-verification" content="bLeMRZdyWTD71cIA-aK6a_suyxL65wS0yJepINOcC6M" />
<link rel="icon" type="image/png" href="<?php echo apm_asset('images/APM_GROUP_logo_transparent.png'); ?>">
<link rel="apple-touch-icon" href="<?php echo apm_asset('images/APM_GROUP_logo_transparent.png'); ?>">
<meta name="description" content="<?php echo htmlspecialchars(isset($meta_description) ? $meta_description : 'ISO certified manufacturer & trader in high-purity Paraformaldehyde, Melamine, Phthalic Acid & Spray Chemicals in Delhi NCR, India since 1994.'); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars(isset($meta_keywords) ? $meta_keywords : 'chemical supplier Delhi NCR, ISO certified chemical manufacturer, Paraformaldehyde supplier India, Melamine trader India, high purity industrial chemicals India'); ?>">
<title><?php echo isset($page_title_raw) ? htmlspecialchars($page_title_raw) : (isset($page_title) ? apm_title($page_title) : apm_title()); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo apm_asset('css/main.css'); ?>?v=<?php echo APM_VERSION; ?>">
<style>
/* ══════════════════════════════════════
   RESET NAV EXTRAS FROM main.css
══════════════════════════════════════ */
#site-header *,
#site-header *::before,
#site-header *::after {
  box-sizing: border-box;
}
.nav-menu li::before,
.nav-menu li::after,
.nav-menu li a::before,
.nav-menu li a::after {
  display: none !important;
  content: none !important;
}
.nav-menu {
  border-bottom: none !important;
  box-shadow: none !important;
}
.nav-menu li {
  border-bottom: none !important;
  padding-bottom: 0 !important;
  margin-bottom: 0 !important;
}
.nav-menu li a {
  border-bottom: none !important;
  text-decoration: none !important;
  box-shadow: none !important;
  outline: none !important;
}

/* ══════════════════════════════════════
   HEADER BASE
══════════════════════════════════════ */
#site-header {
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  z-index: 99999;
  background: #ffffff;
  border-bottom: 2px solid #e2ecf6;
  box-shadow: 0 2px 16px rgba(0,0,0,.08);
  transition: background .35s ease, box-shadow .35s ease, border-color .35s ease;
  margin: 0;
  padding: 0;
}
#site-header.scrolled {
  box-shadow: 0 6px 28px rgba(11,31,58,.18);
}

/* ── Container override ── */
#site-header .container {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
  margin-bottom: 0 !important;
}

/* ── Header Inner ── */
.header-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 68px;
  gap: 12px;
  padding: 0;
  margin: 0;
}

/* ══════════════════════════════════════
   LOGO
══════════════════════════════════════ */
.site-logo {
  display: flex;
  align-items: center;
  gap: 10px;
  text-decoration: none !important;
  flex-shrink: 0;
  max-width: 310px;
  overflow: hidden;
}
.site-logo img {
  height: 40px;
  width: auto;
  max-width: 96px;
  object-fit: contain;
  flex-shrink: 0;
  display: block;
}
.logo-text {
  display: flex;
  flex-direction: column;
  gap: 1px;
  overflow: hidden;
  min-width: 0;
}
.logo-text strong {
  font-size: 11.5px;
  font-weight: 800;
  letter-spacing: .3px;
  color: #0B1F3A;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 1.3;
  display: block;
  transition: color .35s;
}
.logo-text small {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: #2E7FC1;
  white-space: nowrap;
  display: block;
  transition: color .35s;
}
/* ══════════════════════════════════════
   DESKTOP NAV
══════════════════════════════════════ */
#site-nav { display: block; }

.nav-menu {
  display: flex !important;
  align-items: center;
  gap: 0;
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
  height: 68px;
  border: none !important;
  background: transparent !important;
}
.nav-menu > li {
  display: flex;
  align-items: center;
  height: 68px;
  padding: 0 !important;
  margin: 0 !important;
  border: none !important;
  position: relative;
}
.nav-menu > li > a {
  display: flex !important;
  align-items: center;
  height: 68px;
  padding: 0 12px !important;
  font-family: 'Space Grotesk', sans-serif !important;
  font-size: 13px !important;
  font-weight: 700 !important;
  letter-spacing: .8px !important;
  text-transform: uppercase !important;
  text-decoration: none !important;
  color: #0B1F3A !important;
  border: none !important;
  border-bottom: none !important;
  background: transparent;
  white-space: nowrap;
  transition: color .2s, background .2s;
  box-shadow: none !important;
  line-height: 1 !important;
}
.nav-menu > li > a:hover { color: #2E7FC1 !important; background: rgba(46,127,193,.06) !important; }
.nav-menu > li.current-menu-item > a,
.nav-menu > li.current-menu-parent > a { color: #2E7FC1 !important; }

/* Contact Us button */
.nav-menu > li.nav-cta > a {
  background: #2E7FC1 !important;
  color: #ffffff !important;
  height: auto !important;
  padding: 9px 18px !important;
  border-radius: 6px !important;
  margin-left: 8px;
}
.nav-menu > li.nav-cta > a:hover { background: #0B1F3A !important; }

/* ── Dropdown ── */
.has-dropdown { position: relative; }
.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: #ffffff !important;
  border: 1px solid rgba(11,31,58,.1);
  border-top: 2px solid #2E7FC1;
  border-radius: 0 0 8px 8px;
  padding: 6px 0;
  min-width: 220px;
  box-shadow: 0 12px 40px rgba(0,0,0,.14);
  list-style: none !important;
  margin: 0 !important;
  z-index: 99998;
}
.has-dropdown:hover .dropdown-menu { display: block; }
.dropdown-menu li {
  height: auto !important;
  padding: 0 !important;
  margin: 0 !important;
  border: none !important;
}
.dropdown-menu li a {
  display: block !important;
  height: auto !important;
  padding: 10px 18px !important;
  font-family: 'Space Grotesk', sans-serif !important;
  font-size: 13px !important;
  font-weight: 600 !important;
  letter-spacing: .4px !important;
  color: #0B1F3A !important;
  white-space: nowrap;
  transition: .2s;
  border: none !important;
  background: transparent;
}
.dropdown-menu li a:hover { color: #2E7FC1 !important; background: rgba(46,127,193,.06) !important; padding-left: 24px !important; }

/* ══════════════════════════════════════
   HAMBURGER
══════════════════════════════════════ */
.nav-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 5px;
  background: none;
  border: 1.5px solid rgba(11,31,58,.2);
  border-radius: 6px;
  cursor: pointer;
  padding: 8px 10px;
  flex-shrink: 0;
  transition: border-color .3s;
  -webkit-tap-highlight-color: transparent;
}
.nav-toggle span {
  display: block;
  width: 20px;
  height: 2px;
  background: #0B1F3A;
  border-radius: 2px;
  transition: background .35s;
  pointer-events: none;
}
/* ══════════════════════════════════════
   MOBILE NAV DRAWER
══════════════════════════════════════ */
.mobile-nav {
  display: none;
  flex-direction: column;
  background: #ffffff;
  border-top: 2px solid #2E7FC1;
  box-shadow: 0 8px 24px rgba(0,0,0,.12);
  position: relative;
  z-index: 99998;
}
.mobile-nav.open { display: flex !important; }

.mobile-nav > a {
  display: block;
  padding: 14px 24px;
  font-family: 'Space Grotesk', sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  color: #0B1F3A;
  border-bottom: 1px solid rgba(11,31,58,.06);
  transition: .2s;
  -webkit-tap-highlight-color: transparent;
}
.mobile-nav > a:hover,
.mobile-nav > a:active { color: #2E7FC1; background: rgba(46,127,193,.04); }

.mobile-sub {
  display: flex;
  flex-direction: column;
  background: #f7fafd;
  border-bottom: 1px solid rgba(11,31,58,.06);
}
.mobile-sub a {
  display: block;
  padding: 11px 40px;
  font-family: 'Space Grotesk', sans-serif;
  font-size: 12.5px;
  font-weight: 600;
  letter-spacing: .5px;
  color: #445566;
  text-decoration: none;
  border-bottom: 1px solid rgba(11,31,58,.04);
  transition: .2s;
  -webkit-tap-highlight-color: transparent;
}
.mobile-sub a:hover,
.mobile-sub a:active { color: #2E7FC1; }

.mobile-cta { padding: 14px 16px 18px; }
.mobile-cta a {
  display: block;
  background: #2E7FC1;
  color: #ffffff !important;
  text-align: center;
  border-radius: 8px;
  padding: 13px 20px;
  font-family: 'Space Grotesk', sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  transition: .2s;
  -webkit-tap-highlight-color: transparent;
}
.mobile-cta a:hover { background: #0B1F3A !important; }

/* ══════════════════════════════════════
   RESPONSIVE BREAKPOINTS
══════════════════════════════════════ */
@media (min-width: 961px) {
  .nav-toggle { display: none !important; }
  .mobile-nav { display: none !important; }
}
@media (max-width: 960px) {
  #site-nav { display: none !important; }
  .nav-toggle { display: flex !important; }
}
@media (max-width: 1100px) and (min-width: 961px) {
  .nav-menu > li > a { padding: 0 8px !important; font-size: 12px !important; }
  .site-logo { max-width: 240px; }
  .logo-text strong { font-size: 10.5px; }
}
@media (max-width: 600px) {
  .header-inner { height: 58px; }
  .site-logo img { height: 34px; max-width: 80px; }
  .logo-text strong { font-size: 10px; }
  .logo-text small { font-size: 9px; letter-spacing: 1px; }
  .site-logo { max-width: calc(100% - 56px); }
}
@media (max-width: 380px) {
  .site-logo img { height: 30px; }
  .logo-text strong { font-size: 9.5px; }
  .logo-text small { display: none; }
}
</style>
</head>
<body>

<header id="site-header">
  <div class="container">
    <div class="header-inner">

      <a href="<?php echo $base; ?>/" class="site-logo" aria-label="APM Chemical – Home">
        <img src="<?php echo apm_asset('images/APM_GROUP_logo_transparent.png'); ?>" alt="Aggarwal Publicity &amp; Marketing Pvt. Ltd. logo"
             onerror="this.style.display='none';document.getElementById('logo-fallback').style.display='flex'">
        <div id="logo-fallback" style="display:none;width:40px;height:40px;background:#2E7FC1;border-radius:6px;align-items:center;justify-content:center;font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:15px;color:#fff;flex-shrink:0">APM</div>
        <div class="logo-text">
          <strong>AGGARWAL PUBLICITY &amp; MARKETING PVT. LTD.</strong>
          <small>Chemicals &amp; Solvents</small>
        </div>
      </a>

      <nav id="site-nav" aria-label="Primary Navigation">
        <ul class="nav-menu">
          <li<?php echo apm_active('/'); ?>><a href="<?php echo $base; ?>/">Home</a></li>
          <li<?php echo apm_active('/about'); ?>><a href="<?php echo $base; ?>/about">About Us</a></li>
          <li class="has-dropdown<?php echo (strpos($path ?? '/', '/products') === 0) ? ' current-menu-parent' : ''; ?>">
            <a href="<?php echo $base; ?>/products">Products ▾</a>
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
          <li<?php echo apm_active('/news'); ?>><a href="<?php echo $base; ?>/news">News</a></li>
          <li class="nav-cta"><a href="<?php echo $base; ?>/contact">Contact Us</a></li>
        </ul>
      </nav>

      <button class="nav-toggle" id="nav-toggle-btn" aria-label="Toggle navigation" aria-expanded="false" type="button">
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
    <a href="<?php echo $base; ?>/products/paraformaldehyde91">→ Paraformaldehyde 91%</a>
    <a href="<?php echo $base; ?>/products/paraformaldehyde96">→ Paraformaldehyde 96%</a>
    <a href="<?php echo $base; ?>/products/spray-chemicals">→ Spray Chemicals</a>
    <a href="<?php echo $base; ?>/products/melamine">→ Melamine</a>
    <a href="<?php echo $base; ?>/products/phthalic-acid">→ Phthalic Acid</a>
  </div>
  <a href="<?php echo $base; ?>/gallery">Gallery</a>
  <a href="<?php echo $base; ?>/quality-certifications">Quality &amp; Certifications</a>
  <a href="<?php echo $base; ?>/news">News &amp; Blog</a>
  <div class="mobile-cta"><a href="<?php echo $base; ?>/contact">Contact Us</a></div>
</nav>

<script>
(function() {
  var btn = document.getElementById('nav-toggle-btn');
  var nav = document.getElementById('mobile-nav');
  if (!btn || !nav) return;

  function toggleMenu(e) {
    e.preventDefault();
    e.stopPropagation();
    var isOpen = nav.classList.contains('open');
    if (isOpen) {
      nav.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    } else {
      nav.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
    }
  }

  // Both click AND touch
  btn.addEventListener('click', toggleMenu);
  btn.addEventListener('touchstart', toggleMenu, { passive: false });

  // Close on outside tap/click
  document.addEventListener('click', function(e) {
    if (!btn.contains(e.target) && !nav.contains(e.target)) {
      nav.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    }
  });
  document.addEventListener('touchstart', function(e) {
    if (!btn.contains(e.target) && !nav.contains(e.target)) {
      nav.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    }
  }, { passive: true });

  // Close on link tap
  nav.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      nav.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    });
  });

  // Scroll effect
  window.addEventListener('scroll', function() {
    var header = document.getElementById('site-header');
    if (window.scrollY > 60) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
})();

</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Aggarwal Publicity Marketing Pvt. Ltd.",
  "url": "https://aggarwalpublicity.com",
  "logo": "https://aggarwalpublicity.com/assets/images/APM_GROUP_logo_transparent.png",
  "foundingDate": "1994",
  "telephone": "+91 9810152290",
  "email": "aggarwalpublicity@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "8145/2, Street No: 7, Arakashan Rd, near Hotel White House, Multani Dhanda, Paharganj",
    "addressLocality": "New Delhi",
    "addressRegion": "Delhi",
    "postalCode": "110055",
    "addressCountry": "IN"
  },
  "areaServed": ["Delhi NCR", "India"]
}
</script>
<?php if (isset($meta_breadcrumb)) : ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Home","item":"https://aggarwalpublicity.com/"},
    {"@type":"ListItem","position":2,"name":"<?php echo htmlspecialchars($meta_breadcrumb); ?>","item":"https://aggarwalpublicity.com<?php echo $path; ?>"}
  ]
}
</script>
<?php endif; ?>
<?php if (isset($product_schema)) : ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ChemicalSubstance",
  "name": "<?php echo htmlspecialchars($product_schema['name']); ?>",
<?php if (!empty($product_schema['cas'])) : ?>
  "identifier": {
    "@type": "PropertyValue",
    "propertyID": "CAS",
    "value": "<?php echo htmlspecialchars($product_schema['cas']); ?>"
  },
<?php endif; ?>
  "supplier": {
    "@type": "Organization",
    "name": "Aggarwal Publicity Marketing Pvt. Ltd.",
    "url": "https://aggarwalpublicity.com"
  }
}
</script>
<?php endif; ?>