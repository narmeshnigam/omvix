<?php
require __DIR__ . '/bootstrap.php';
$page_title = 'Page Not Found | Omvix';
require __DIR__ . '/includes/header.php';
?>
<section style="padding:96px 24px; text-align:center;">
  <h1>Page Not Found</h1>
  <p>Sorry, the page you requested could not be found.</p>
  <a href="<?= BASE_URL ?>/" class="btn">Back to Home</a>
</section>
<?php require __DIR__ . '/includes/footer.php';
?>
