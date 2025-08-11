<?php
declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', '/omvix');

$pages = [
  'home' => 'pages/home.php',
  'solutions' => 'pages/solutions.php',
  'projects' => 'pages/projects.php',
  'learn' => 'pages/learn.php',
  'for-homeowners' => 'pages/for-homeowners.php',
  'for-professionals' => 'pages/for-professionals.php',
  'contact' => 'pages/contact.php',
  'book-demo' => 'pages/book-demo.php',
];

echo 'BASE_PATH: ' . BASE_PATH . PHP_EOL;
echo 'BASE_URL: ' . BASE_URL . PHP_EOL;
foreach ($pages as $slug => $file) {
    echo $file . ': ' . (file_exists(BASE_PATH . '/' . $file) ? 'OK' : 'MISSING') . PHP_EOL;
}

if (function_exists('apache_get_modules')) {
    $mods = apache_get_modules();
    echo 'mod_rewrite: ' . (in_array('mod_rewrite', $mods) ? 'enabled' : 'disabled') . PHP_EOL;
} else {
    echo 'mod_rewrite: unknown' . PHP_EOL;
}

echo PHP_EOL . 'Reminder: In httpd.conf, for the <Directory "C:/xampp/htdocs"> block, set AllowOverride All so .htaccess works.' . PHP_EOL;
