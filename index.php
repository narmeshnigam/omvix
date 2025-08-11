<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('BASE_PATH', __DIR__);
define('BASE_URL', '/omvix'); // change if folder differs

// Autoload/boot file if present:
$boot = BASE_PATH . '/bootstrap.php';
if (file_exists($boot)) require_once $boot;

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$uri = preg_replace('#^/omvix#', '', $uri); // subfolder-aware
$uri = trim($uri, '/');

$map = [
  ''               => 'pages/home.php',
  'index.php'      => 'pages/home.php',
  'solutions'      => 'pages/solutions.php',
  'projects'       => 'pages/projects.php',
  'learn'          => 'pages/learn.php',
  'for-homeowners' => 'pages/for-homeowners.php',
  'for-professionals' => 'pages/for-professionals.php',
  'contact'        => 'pages/contact.php',
  'book-demo'      => 'pages/book-demo.php',
];

$file = $map[$uri] ?? null;
if ($file && file_exists(BASE_PATH . '/' . $file)) {
  require BASE_PATH . '/includes/header.php';
  require BASE_PATH . '/' . $file;
  require BASE_PATH . '/includes/footer.php';
  exit;
}

// fallback to physical php if someone hits /something.php directly
if (preg_match('#\\.php$#', $uri) && file_exists(BASE_PATH . '/' . $uri)) {
  require BASE_PATH . '/includes/header.php';
  require BASE_PATH . '/' . $uri;
  require BASE_PATH . '/includes/footer.php';
  exit;
}

// 404
http_response_code(404);
require BASE_PATH . '/pages/404.php';
