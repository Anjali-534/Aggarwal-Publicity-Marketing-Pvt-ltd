<?php
/**
 * APM Chemical – Helper Functions
 */

// Auto-detect base URL (works at root OR in any subfolder like /apm-php/)
$script_dir = dirname($_SERVER['PHP_SELF']);
$script_dir = rtrim($script_dir, '/');
define('APM_BASE_URL', '/apm-php');

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
    return $page_title ? htmlspecialchars("$page_title – $site") : htmlspecialchars($site . ' | Chemical Manufacturers, Delhi');
}

function apm_page_banner($title, $subtitle, $breadcrumb_label) {
    $base = APM_BASE_URL;
    echo '<div class="page-banner">';
    echo '  <div class="container page-banner-content">';
    echo '    <div class="breadcrumb">';
    echo '      <a href="' . $base . '/">Home</a><span class="sep">›</span><span>' . htmlspecialchars($breadcrumb_label) . '</span>';
    echo '    </div>';
    echo '    <h1>' . $title . '</h1>';
    if ($subtitle) echo '    <p class="lead">' . $subtitle . '</p>';
    echo '  </div>';
    echo '</div>';
}