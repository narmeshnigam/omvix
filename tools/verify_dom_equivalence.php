<?php
declare(strict_types=1);

function extract_body(string $html): string {
    if (!preg_match('/<body[^>]*>(.*)<\/body>/si', $html, $m)) return '';
    return trim($m[1]);
}

function strip_layout(string $html): string {
    // replace .html links with .php for comparison
    $html = str_replace('.html', '.php', $html);
    // remove header/footer around main
    $html = preg_replace('/.*?<main>/si', '', $html);
    $html = preg_replace('/<\/main>.*/si', '', $html);
    // normalize whitespace
    $html = preg_replace('/\s+/', ' ', $html);
    return trim($html);
}

$baseDir = dirname(__DIR__);
$origDir = __DIR__ . '/original_html';

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($origDir));
foreach ($iterator as $file) {
    if ($file->getExtension() !== 'html') continue;
    $rel = substr($file->getPathname(), strlen($origDir)+1); // e.g., solutions/page.html
    $phpPath = $baseDir . '/' . substr($rel, 0, -5) . '.php';
    if (!file_exists($phpPath)) {
        echo "Missing PHP for $rel\n";
        continue;
    }
    $orig = file_get_contents($file->getPathname());
    $new = shell_exec('php ' . escapeshellarg($phpPath));
    $origBody = strip_layout(extract_body($orig));
    $newBody = strip_layout(extract_body($new));
    if ($origBody === $newBody) {
        echo "$rel: PASS\n";
    } else {
        echo "$rel: FAIL\n";
    }
}
