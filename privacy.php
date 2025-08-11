<?php
declare(strict_types=1);
require __DIR__ . '/bootstrap.php';
$page_title = 'Privacy Policy & Terms | iSwift Smart Home Automation';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Read iSwift’s privacy policy and terms of use. Learn how we collect, use, and protect your data while offering smart home automation in Delhi NCR.">
<meta name="keywords" content="iSwift privacy policy, WhatsApp API disclosure, smart home terms of use, website data collection">
HTML;
require __DIR__ . '/includes/header.php';
?>
<!-- Header -->

    <!-- Hero Banner (Flat Header) -->
    <section style="padding: 96px 24px; text-align: center; background-color: #3B1F0F;">
      <h1 style="color: #FF6F40; font-size: 36px; font-weight: 700;">Privacy Policy & Terms of Use</h1>
      <p style="font-size: 14px; color: #5A4033;">Effective Date: June 30, 2025</p>
    </section>

    <!-- Introduction -->
    <section style="padding: 48px 24px; max-width: 800px; margin: auto;">
      <h2 style="color: #FF6F40; margin-bottom: 16px;">Your Privacy Matters to iSwift</h2>
      <p>We are committed to protecting your personal information and your right to privacy. This policy outlines what data we collect, how it’s used, and what rights you have in relation to it.</p>
    </section>

    <!-- Accordion Sections -->
    <section style="padding: 48px 24px; max-width: 800px; margin: auto;">
      <div class="accordion">
        <details open>
          <summary>3.1 Information We Collect</summary>
          <p>Name, Email, Phone (via forms)<br>WhatsApp number and chat history (via WhatsApp API)<br>Browsing data via cookies and analytics</p>
        </details>
        <details>
          <summary>3.2 How We Use Your Information</summary>
          <p>To schedule consultations and respond to queries<br>To improve our offerings and optimize your experience<br>To send updates through WhatsApp or email (only if permitted)</p>
        </details>
        <details>
          <summary>3.3 Cookie Policy</summary>
          <p>We use cookies for analytics and performance (no tracking for ads beyond Meta Pixel).<br>You can disable cookies via your browser settings.</p>
        </details>
        <details>
          <summary>3.4 WhatsApp Communication Disclosure</summary>
          <p>By clicking on “Chat on WhatsApp,” you consent to being contacted via WhatsApp.<br>WhatsApp conversations may be automated using our official business API.</p>
        </details>
        <details>
          <summary>3.5 Data Sharing & Storage</summary>
          <p>No personal data is sold to third parties.<br>Data is stored securely and only used by iSwift or authorized personnel.</p>
        </details>
        <details>
          <summary>3.6 User Rights</summary>
          <p>You may request deletion or update of your personal data at any time.<br>Contact us at <a href="mailto:privacy@iswift.in" style="color: #FF6F40;">privacy@iswift.in</a> for data requests.</p>
        </details>
        <details>
          <summary>3.7 Terms of Website Use</summary>
          <p>All content is property of iSwift and cannot be copied or redistributed.<br>Misuse, abuse, or unauthorized scraping is strictly prohibited.</p>
        </details>
        <details>
          <summary>3.8 Changes to This Policy</summary>
          <p>Any changes will be updated here.<br>Major changes may be communicated via email if applicable.</p>
        </details>
      </div>
    </section>

    <!-- Contact Highlight -->
    <section style="padding: 48px 24px; background: rgba(255,255,255,0.02); text-align: center;">
      <h3 style="color: #FF6F40; font-size: 22px; margin-bottom: 16px;">Need Clarification?</h3>
      <p>For any questions related to privacy, data usage, or website terms, please email us at:</p>
      <a href="mailto:privacy@iswift.in" class="btn">privacy@iswift.in</a>
    </section>

    <!-- Back to Top CTA -->
    <a href="#top" aria-label="Back to top"
       style="position: fixed; bottom: 90px; right: 24px; background-color: #FF6F40; color: #3B1F0F; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(0,0,0,0.3); font-weight: bold; z-index: 9999; text-decoration: none;">
      ↑
    </a>
  </main>

  <!-- Footer -->
    details {
      border-bottom: 1px solid #FF6F40;
      padding: 12px 0;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    summary {
      font-weight: 600;
      color: #FF6F40;
      outline: none;
    }
    details[open] summary::after {
      content: "▲";
      float: right;
      font-size: 12px;
    }
    summary::after {
      content: "▼";
      float: right;
      font-size: 12px;
    }
    .btn {
      background-color: #FFB347;
      color: #3B1F0F;
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
    }
    .btn:hover {
      filter: brightness(1.1);
      transform: scale(1.02);
    }
  </style>
<?php require __DIR__ . '/includes/footer.php'; ?>
