<?php
declare(strict_types=1);
require __DIR__ . '/../bootstrap.php';
$page_title = 'AMC Options | iSwift';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Learn about iSwift annual maintenance contracts for long-term smart home care.">
HTML;
require __DIR__ . '/../includes/header.php';
?>
<main style="padding:96px 24px; max-width:800px; margin:auto; text-align:center;">
    <h1 style="font-size:36px; margin-bottom:24px;">Annual Maintenance Contracts</h1>
    <p style="color:#5A4033; margin-bottom:32px;">Protect your investment with flexible maintenance plans.</p>
    <a href="<?= BASE_URL ?>/book-demo.php" class="btn">Book a Demo</a>
  </main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
