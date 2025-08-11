<?php
declare(strict_types=1);
$page_title = 'About iSwift | Trusted Smart Home Automation in Delhi NCR';
$active_nav = '';
$base_path = '';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="iSwift, evolved from SecureIndia, specializes in premium smart-home solutions for luxury living in Delhi, Gurgaon, Noida, Ghaziabad, Greater Noida & Delhi NCR.">
<meta name="keywords" content="luxury home automation, smart home integration, SecureIndia, trusted smart home brand, smart homes Delhi NCR">
HTML;
include __DIR__ . '/partials/header.php';
?>
<!-- Section 1: Hero Banner -->
    <section style="position: relative; height: 60vh; background-image: url('/assets/about-hero.jpg'); background-size: cover; background-position: center;">
      <div style="position: absolute; inset: 0; background: rgba(0,42,34,0.75); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 24px;">
        <h1 style="font-size: 48px; font-weight: 700; color: #FF6F40; margin-bottom: 16px;">The iSwift Story</h1>
        <p style="font-size: 18px; font-weight: 400; max-width: 720px;">Where Intelligent Automation Meets Luxury Living.</p>
      </div>
    </section>

    <!-- Section 2: Brand Story & Evolution -->
    <section style="display: flex; flex-wrap: wrap; align-items: center; padding: 96px 24px; gap: 48px;">
      <div style="flex: 1 1 60%; min-width: 300px;">
        <h2 style="font-size: 36px; font-weight: 600; margin-bottom: 24px;">From SecureIndia to iSwift: A Journey of Innovation</h2>
        <p style="font-size: 16px; line-height: 1.6;">iSwift began as SecureIndia Automations, pioneers in smart security and automation solutions. Today, we provide comprehensive luxury smart-home experiences tailored to your lifestyle. Our journey is built on reliability, innovation, and client satisfaction, continuing to set new standards in smart home living.</p>
      </div>
      <div style="flex: 1 1 35%; min-width: 280px;">
        <img src="/assets/brand-evolution.jpg" alt="Brand Evolution" style="width: 100%; border-radius: 16px;">
      </div>
    </section>

    <!-- Section 3: Vision & Mission -->
    <section style="padding: 96px 24px;">
      <div style="display: flex; flex-wrap: wrap; gap: 32px; justify-content: center;">
        <div class="card" style="background: rgba(255,255,255,0.04); border-radius: 16px; padding: 24px; flex: 1 1 300px; max-width: 400px; text-align: center;">
          <img src="/icons/eye-icon.svg" alt="Vision" style="height: 48px; margin-bottom: 16px;">
          <h3>Our Vision</h3>
          <p>To redefine luxury living through intelligent automation, creating comfortable, secure, and elegant homes.</p>
        </div>
        <div class="card" style="background: rgba(255,255,255,0.04); border-radius: 16px; padding: 24px; flex: 1 1 300px; max-width: 400px; text-align: center;">
          <img src="/icons/compass-icon.svg" alt="Mission" style="height: 48px; margin-bottom: 16px;">
          <h3>Our Mission</h3>
          <p>Deliver premium smart-home solutions through unparalleled customer service, expert guidance, and seamless integration.</p>
        </div>
      </div>
    </section>

    <!-- Section 4: Core Values -->
    <section style="padding: 96px 24px; text-align: center;">
      <h2 style="font-size: 36px; font-weight: 600; margin-bottom: 48px;">Our Core Values</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 32px; max-width: 1000px; margin: auto;">
        <div><img src="/icons/bulb-icon.svg" alt="Innovation" style="height: 48px;"><h3>Innovation</h3><p>Always embracing new technologies and smarter solutions.</p></div>
        <div><img src="/icons/shield-check-icon.svg" alt="Reliability"><h3>Reliability</h3><p>Consistently delivering on promises, ensuring peace of mind.</p></div>
        <div><img src="/icons/diamond-icon.svg" alt="Luxury"><h3>Luxury</h3><p>Maintaining the highest standards in elegance and comfort.</p></div>
        <div><img src="/icons/handshake-icon.svg" alt="Integrity"><h3>Integrity</h3><p>Building trust through transparency and ethical practices.</p></div>
      </div>
    </section>

    <!-- Section 5: Why Choose iSwift? -->
    <section style="display: flex; flex-wrap: wrap; align-items: center; padding: 96px 24px; gap: 48px;">
      <div style="flex: 1 1 60%; min-width: 300px;">
        <h2 style="font-size: 36px; font-weight: 600; margin-bottom: 24px;">What Sets Us Apart?</h2>
        <p style="font-size: 16px; line-height: 1.6;">iSwift stands out as a multi-brand integrator, not limited to specific products. We manage your entire smart-home automation lifecycle, offering tailored solutions whether in pre-construction planning or retrofitting existing properties.</p>
      </div>
      <div style="flex: 1 1 35%; min-width: 280px;">
        <img src="/assets/consulting-scene.jpg" alt="iSwift Consulting" style="width: 100%; border-radius: 16px;">
      </div>
    </section>

    <!-- Section 6: Certifications & Partnerships -->
    <section style="padding: 96px 24px; text-align: center;">
      <h2 style="font-size: 36px; font-weight: 600; margin-bottom: 48px;">Trusted by Leading Brands and Partners</h2>
      <div class="logo-slider" style="display: flex; overflow-x: auto; gap: 48px; padding-bottom: 16px;">
        <img src="/logos/yale.png" alt="Yale" style="height: 48px; filter: grayscale(100%); transition: filter 0.3s;">
        <img src="/logos/godrej.png" alt="Godrej" style="height: 48px; filter: grayscale(100%);">
        <img src="/logos/qubo.png" alt="Qubo" style="height: 48px; filter: grayscale(100%);">
        <img src="/logos/tplink.png" alt="TP-Link" style="height: 48px; filter: grayscale(100%);">
        <img src="/logos/netgear.png" alt="Netgear" style="height: 48px; filter: grayscale(100%);">
        <img src="/logos/alexa.png" alt="Alexa" style="height: 48px; filter: grayscale(100%);">
        <img src="/logos/google-home.png" alt="Google Home" style="height: 48px; filter: grayscale(100%);">
        <img src="/logos/siri.png" alt="Siri" style="height: 48px; filter: grayscale(100%);">
      </div>
      <a href="/book-demo.php" style="margin-top: 48px; background-color: #FFB347; color: #3B1F0F; padding: 16px 32px; border-radius: 12px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; display: inline-block;">Book Your Free Consultation</a>
    </section>

    <!-- Sticky WhatsApp CTA -->
    <a href="https://wa.me/919876543210?text=Hi, I'm interested in iSwift smart home automation." target="_blank" aria-label="Chat on WhatsApp"
       style="position: fixed; bottom: 24px; right: 24px; background-color: #FF6F40; border-radius: 50%; width: 56px; height: 56px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(0,0,0,0.3); z-index: 9999;">
      <img src="/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 24px;">
    </a>
  </main>

    .logo-slider img:hover {
      filter: grayscale(0%);
    }
  </style>
<?php include __DIR__ . '/partials/footer.php'; ?>
