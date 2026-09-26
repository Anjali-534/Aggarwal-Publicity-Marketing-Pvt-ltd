<?php
/**
 * APM Chemical – Main Router
 * Aggarwal Publicity Marketing Pvt. Ltd.
 * Pure PHP site — no framework required.
 */

error_reporting(0);
ini_set('display_errors', '0');

define('APM_ROOT', __DIR__);
define('APM_CSS_VERSION', filemtime(APM_ROOT . '/assets/css/main.css'));
define('APM_JS_VERSION', filemtime(APM_ROOT . '/assets/js/main.js'));

define('APM_CONFIG', [
    'site_name'  => 'Aggarwal Publicity Marketing Pvt. Ltd.',
    'site_short' => 'Aggarwal Publicity Marketing Pvt. Ltd.',
    'tagline'    => 'Chemical Excellence Redefined',
    'phone'      => '+91 9810152290',
    'email'      => 'aggarwalpublicity@gmail.com',
    'address'    => '8145/2, Street No: 7, Arakashan Rd, near Hotel White House, Multani Dhanda, Paharganj, New Delhi, Delhi 110055',
    'whatsapp'   => '9810152290',
    'est_year'   => '1994',
    'base_url'   => '',// e.g. '/apm-chemical' if not at root
]);

$uri      = strtok($_SERVER['REQUEST_URI'], '?');
$base_dir = rtrim(dirname($_SERVER['PHP_SELF']), '/');
$path     = $base_dir ? preg_replace('#^' . preg_quote($base_dir, '#') . '#', '', $uri) : $uri;
$path     = rtrim($path, '/') ?: '/';


$routes = [
    '/'                          => 'home',
    '/about'                     => 'about',
    '/products'                  => 'products',
    '/products/paraformaldehyde91' => 'product-paraformaldehyde91',
    '/products/paraformaldehyde96' => 'product-paraformaldehyde96',
    '/products/spray-chemicals'  => 'product-spray-chemicals',
    '/products/melamine'         => 'product-melamine',
    '/products/phthalic-acid'    => 'product-phthalic-acid',
    '/quality-certifications'    => 'quality',
    '/bogie-ai'                  => 'bogie-ai',
    '/news'                      => 'news',
    '/contact'                   => 'contact',
];

// AJAX contact handler
if ($path === '/contact' && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apm_contact'])) {
    require APM_ROOT . '/includes/contact-handler.php';
    exit;
}

$page = $routes[$path] ?? '404';

require APM_ROOT . '/includes/functions.php';

// Buffer the page body first so it can set $page_title / $meta_description / $meta_keywords
// before header.php (which reads them) renders <title> and <meta>.
$page_file = APM_ROOT . '/pages/' . $page . '.php';
ob_start();
if (file_exists($page_file)) {
    require $page_file;
} else {
    require APM_ROOT . '/pages/404.php';
}
$page_content = ob_get_clean();

require APM_ROOT . '/includes/header.php';
echo $page_content;
require APM_ROOT . '/includes/footer.php';
