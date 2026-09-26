<?php
/**
 * APM Chemical – Helper Functions
 */

// Auto-detect base URL (works at root OR in any subfolder like /apm-php/)
$script_dir = dirname($_SERVER['PHP_SELF']);
$script_dir = str_replace('\\', '/', $script_dir);
$script_dir = rtrim($script_dir, '/');
define('APM_BASE_URL', $script_dir);

function apm($key) {
    return htmlspecialchars(APM_CONFIG[$key] ?? '', ENT_QUOTES, 'UTF-8');
}

function apm_url($path = '') {
    return APM_BASE_URL . $path;
}

function apm_asset($path) {
    return APM_BASE_URL . '/assets/' . ltrim($path, '/');
}

function apm_active($route) {
    global $path;
    if ($route === '/' && $path === '/') return ' class="current-menu-item"';
    if ($route !== '/' && $path === $route) return ' class="current-menu-item"';
    if ($route !== '/' && strpos($path, $route) === 0) return ' class="current-menu-parent"';
    return '';
}

function apm_title($page_title = '') {
    $site = APM_CONFIG['site_short'];
    return $page_title ? htmlspecialchars("$page_title – $site") : htmlspecialchars('Aggarwal Publicity Marketing | Paraformaldehyde Trader Delhi');
}

function apm_page_banner($title, $subtitle, $breadcrumb_label, $video = false, $bg_image = false) {
    global $meta_breadcrumb;
    $meta_breadcrumb = $breadcrumb_label;
    $base = APM_BASE_URL;
    echo '<div class="page-banner">';
    if ($video) {
        $video_file = is_string($video) ? $video : 'aggarwalpublicity.mp4';
        echo '  <video class="hero-video-bg" id="page-banner-video" muted loop playsinline preload="metadata" aria-hidden="true">';
        echo '    <source src="' . apm_asset('videos/' . $video_file) . '" type="video/mp4">';
        echo '  </video>';
        echo '  <div class="hero-video-overlay" aria-hidden="true"></div>';
        echo '  <script>';
        echo '  (function () {';
        echo '    var v = document.getElementById("page-banner-video");';
        echo '    if (v && !window.matchMedia("(prefers-reduced-motion: reduce)").matches) {';
        echo '      v.setAttribute("autoplay", "");';
        echo '      var p = v.play();';
        echo '      if (p && p.catch) p.catch(function () {});';
        echo '    }';
        echo '  })();';
        echo '  </script>';
    } elseif ($bg_image) {
        echo '  <img class="hero-video-bg" src="' . apm_asset('images/' . $bg_image) . '" alt="" aria-hidden="true">';
        echo '  <div class="hero-video-overlay" aria-hidden="true"></div>';
    }
    echo '  <div class="container page-banner-content">';
    echo '    <div class="breadcrumb">';
    echo '      <a href="' . $base . '/">Home</a><span class="sep">›</span><span>' . htmlspecialchars($breadcrumb_label) . '</span>';
    echo '    </div>';
    echo '    <h1>' . $title . '</h1>';
    if ($subtitle) echo '    <p class="lead">' . $subtitle . '</p>';
    echo '  </div>';
    echo '</div>';
}