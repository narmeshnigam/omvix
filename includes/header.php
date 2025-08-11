<?php
declare(strict_types=1);
$page_title = $page_title ?? 'Omvix';
$body_attrs = $body_attrs ?? '';
$extra_head = $extra_head ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16739646595"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-16739646595');
  </script>
  <?php if ($extra_head !== '') { echo $extra_head; } ?>
</head>
<body<?= $body_attrs ?>>
<!-- iSwift Website Header -->
<header id="site-header" role="banner" style="position: fixed; top: 0; left: 0; width: 100%; background: #FFF8F0; z-index: 1000; transition: all 0.3s ease-in-out; font-family: 'Inter', sans-serif;">
  <div class="header-inner" style="max-width: 1280px; margin: auto; padding: 24px 48px; display: flex; align-items: center; justify-content: space-between; position: relative;">

    <!-- Logo -->
    <div class="logo">
      <img src="<?= BASE_URL ?>/assets/images/iSwift_logo.png" alt="iSwift Logo" style="height: 48px;" />
    </div>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav" role="navigation" aria-label="Main menu" style="display: flex; gap: 32px; font-weight: 600; font-size: 18px; flex: 1; min-width: 0; overflow: visible;">
      <div class="nav-links" style="display: flex; gap: 32px; white-space: nowrap; flex: 1; min-width: 0; overflow: hidden; margin-left: 2%;">
        <a href="<?= BASE_URL ?>/">Home</a>
        <a href="<?= BASE_URL ?>/solutions.php">Solutions</a>
        <a href="<?= BASE_URL ?>/projects.php">Projects</a>
        <a href="<?= BASE_URL ?>/learn.php">Learn</a>
        <a href="<?= BASE_URL ?>/for-homeowners.php">For Homeowners</a>
        <a href="<?= BASE_URL ?>/for-professionals.php">For Professionals</a>
        <a href="<?= BASE_URL ?>/contact.php">Contact</a>
      </div>
      <div class="more-dropdown" style="position: relative; display: none;">
        <button style="background: none; border: none; font-weight: 600; cursor: pointer; color: #E25822;">More ▾</button>
        <ul class="more-menu" style="display: none; position: absolute; top: 100%; left: 0; background: #FFF8F0; list-style: none; margin: 0; padding: 12px 0; box-shadow: 0 4px 8px rgba(0,0,0,0.1); z-index: 1000;"></ul>
      </div>
    </nav>

    <!-- CTA Buttons -->
    <div class="cta-buttons" style="display: flex; align-items: center; gap: 16px;">
      <a href="<?= BASE_URL ?>/book-demo.php" class="btn cta-desktop" style="background: #FFB347; color: #3B1F0F; padding: 12px 24px; border-radius: 12px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">Book a Demo</a>
      <a class="cta-desktop" href="https://wa.me/919654640101?text=Hi, I'm interested in iSwift smart home automation." target="_blank" aria-label="WhatsApp Contact">
        <img src="<?= BASE_URL ?>/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 24px; width: 24px;">
      </a>
    </div>

    <!-- Hamburger Icon -->
    <div class="mobile-menu-icon" onclick="toggleMobileMenu()" aria-label="Toggle navigation menu" style="display: none; position: absolute; right: 24px; top: 24px; cursor: pointer;">
      <img src="<?= BASE_URL ?>/assets/images/hamburger-icon.svg" alt="Menu" style="height: 24px;">
    </div>
  </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="drawer-overlay" onclick="toggleMobileMenu()" style="display: none; position: fixed; inset: 0; background: rgba(0, 0, 0, 0.5); z-index: 9998;"></div>

<!-- Mobile Drawer -->
<div id="mobile-drawer" role="navigation" aria-label="Mobile menu" style="position: fixed; top: 0; right: 0; width: 280px; height: 100vh; background-color: #FFF8F0; padding: 24px; font-size: 18px; color: #E25822; z-index: 9999; transform: translateX(100%); transition: transform 0.3s ease-in-out; overflow-y: auto;">
  <nav style="display: flex; flex-direction: column; gap: 16px;">
    <a href="<?= BASE_URL ?>/">Home</a>
    <a href="<?= BASE_URL ?>/solutions.php">Solutions</a>
    <a href="<?= BASE_URL ?>/projects.php">Projects</a>
    <a href="<?= BASE_URL ?>/learn.php">Learn</a>
    <a href="<?= BASE_URL ?>/for-homeowners.php">For Homeowners</a>
    <a href="<?= BASE_URL ?>/for-professionals.php">For Professionals</a>
    <a href="<?= BASE_URL ?>/contact.php">Contact</a>
    <a href="<?= BASE_URL ?>/book-demo.php" class="btn" style="margin-top: 16px; background-color: #FFB347; color: #3B1F0F; padding: 12px 24px; border-radius: 12px; text-align: center; text-decoration: none; font-weight: 600;">Book a Demo</a>
    <a href="https://wa.me/919654640101?text=Hi, I'm interested in iSwift smart home automation." target="_blank" aria-label="Chat on WhatsApp" style="margin-top: auto;">
      <img src="<?= BASE_URL ?>/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 24px; width: 24px;">
    </a>
  </nav>
</div>

<!-- Floating WhatsApp -->
<a class="floating-whatsapp" href="https://wa.me/919654640101?text=Hi, I'm interested in iSwift smart home automation." target="_blank" aria-label="Chat on WhatsApp" style="position: fixed; bottom: 24px; right: 24px; z-index: 1000;">
  <img src="<?= BASE_URL ?>/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 48px; width: 48px; border-radius: 50%; box-shadow: 0 2px 6px rgba(0,0,0,0.3);">
</a>
<main>
