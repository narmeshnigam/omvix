<?php
declare(strict_types=1);
$page_title = 'Request a Quote | iSwift';
$active_nav = '';
$base_path = '';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Request a custom quotation for iSwift smart home solutions in Delhi NCR.">
HTML;
include __DIR__ . '/partials/header.php';
?>
<main style="padding:96px 24px; max-width:800px; margin:auto; text-align:center;">
    <h1 style="font-size:36px; margin-bottom:24px;">Request a Quote</h1>
    <p style="color:#5A4033; margin-bottom:32px;">Tell us a bit about your project and we'll get back to you with pricing details.</p>
    <form style="display:grid; gap:16px;">
      <input type="text" placeholder="Name" required>
      <input type="email" placeholder="Email" required>
      <input type="tel" placeholder="Phone" required>
      <textarea rows="4" placeholder="Project Details" required></textarea>
      <button type="submit" class="btn">Submit Request</button>
    </form>
  </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
