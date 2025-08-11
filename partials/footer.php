<?php
declare(strict_types=1);
$base_path = $base_path ?? '';
?>
<!-- iSwift Website Footer -->
<footer role="contentinfo" style="background-color: #FFF8F0; color: #5A4033; font-family: 'Inter', sans-serif; padding: 48px 24px;">
  <!-- Section A: Top CTA Strip -->
  <div style="border-top: 1px solid rgba(255,255,255,0.05); padding: 32px 0; text-align: center;">
    <h3 style="font-weight: 500; margin-bottom: 12px; font-size: 22px;">Need Help Choosing the Right Smart Solutions?</h3>
    <p style="font-size: 14px; margin-bottom: 20px;">Book a free consultation or message us directly—our experts are ready to help.</p>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 16px;">
      <a href="/book-demo.php" style="background-color: #FFB347; color: #3B1F0F; padding: 12px 24px; border-radius: 12px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; width: 200px;;">Book Demo</a>
      <a href="https://wa.me/919654640101?text=Hi, I'm interested in iSwift smart home automation." target="_blank" style="background-color: #FFB347; color: #3B1F0F; padding: 12px 24px; border-radius: 12px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; width: 200px;;">Chat on WhatsApp</a>
    </div>
  </div>

  <!-- Section B: Main Footer Grid -->
  <div class="footer-grid" style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 48px; padding: 48px 0;">
    <!-- Column 1: Brand & Description -->
    <div style="flex: 1 1 240px; min-width: 260px;">
      <img src="/assets/images/iSwift_logo.png" alt="iSwift Logo" style="height: 48px; margin-bottom: 16px;">
      <p style="font-size: 16px; line-height: 1.6; max-width: 320px;">iSwift is a luxury smart home automation brand offering intelligent solutions to homeowners and professionals. From consultation to installation and support—we handle everything, beautifully.</p>
      <div style="margin-top: 16px; display: flex; gap: 12px;">
        <a href="https://wa.me/919654640101" target="_blank" aria-label="WhatsApp">
          <img src="/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 30px; padding: 4px;">
        </a>
        <a href="https://www.facebook.com/Secureindia8/" target="_blank" aria-label="Facebook">
          <img src="/assets/images/facebook.svg" alt="Facebook" style="height: 30px; padding: 4px;">
        </a>
        <a href="https://www.instagram.com/secureindia.smarthome/" target="_blank" aria-label="Instagram">
          <img src="/assets/images/instagram.svg" alt="Instagram" style="height: 30px; padding: 4px;">
        </a>
        <a href="https://www.youtube.com/@smarthomeautomations" target="_blank" aria-label="YouTube">
          <img src="/assets/images/youtube.svg" alt="YouTube" style="height: 30px; padding: 4px;">
        </a>
      </div>
    </div>

    <!-- Column 2: Quick Links -->
    <div style="flex: 1 1 200px; min-width: 200px;">
      <h4 style="font-size: 16px; margin-bottom: 16px;">Quick Links</h4>
      <ul style="list-style: none; padding: 0; margin: 0;">
        <li><a href="/index.php" style="color: #5A4033; text-decoration: none; transition: all 0.3s ease;">Home</a></li>
        <li><a href="/solutions.php" style="color: #5A4033; text-decoration: none;">Solutions</a></li>
        <li><a href="/projects.php" style="color: #5A4033; text-decoration: none;">Projects</a></li>
        <li><a href="/learn.php" style="color: #5A4033; text-decoration: none;">Learn</a></li>
        <li><a href="/homeowners.php" style="color: #5A4033; text-decoration: none;">For Homeowners</a></li>
        <li><a href="/professionals.php" style="color: #5A4033; text-decoration: none;">For Professionals</a></li>
        <li><a href="/contact.php" style="color: #5A4033; text-decoration: none;">Contact Us</a></li>
        <li><a href="/book-demo.php" style="color: #5A4033; text-decoration: none;">Book a Demo</a></li>
      </ul>
    </div>

    <!-- Column 3: Contact Info -->
    <div style="flex: 1 1 260px; min-width: 260px;">
      <h4 style="font-size: 16px; margin-bottom: 16px;">Get in Touch</h4>
      <p style="font-size: 14px;">📍 1605, S-3, Cloud 9 Towers, Vaishali, Ghaziabad – 201009</p>
      <p style="font-size: 14px;"><a href="tel:+919654640101" style="color: #5A4033; text-decoration: none;">📞 +91 96546 40101</a></p>
      <p style="font-size: 14px;"><a href="mailto:hi@iswift.in" style="color: #5A4033; text-decoration: none;">✉️ hi@iswift.in</a></p>
      <p style="font-size: 14px;">🕒 Mon – Sat: 10 AM to 7 PM</p>
      <p style="margin-top: 12px;"><a href="https://maps.google.com/?q=Cloud+9,+Apartments+Vaishali,+Ghaziabad" target="_blank" style="color: #FF6F40; text-decoration: underline;">Get Directions →</a></p>
    </div>
  </div>

  <!-- Section C: Bottom Strip -->
  <div style="border-top: 1px solid rgba(255,255,255,0.05); padding: 16px 0; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; text-align: center; font-size: 14px;">
    <p style="margin: 8px 0;">© 2025 iSwift. All rights reserved.</p>
    <div style="display: flex; gap: 12px;">
      <a href="/privacy.php" style="color: #FF6F40; text-decoration: underline;">Privacy Policy</a>
      <span>|</span>
      <a href="/terms.php" style="color: #FF6F40; text-decoration: underline;">Terms of Use</a>
    </div>
  </div>
</footer>

<style>
  footer a:hover {
    color: #FF6F40;
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .footer-grid {
      flex-direction: column;
      gap: 32px;
    }
  }
</style>
<script defer src="<?= $base_path ?>js/main.js"></script>
</body>
</html>
