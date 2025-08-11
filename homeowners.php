<?php
declare(strict_types=1);
$page_title = 'Smart Home Automation for Homeowners | iSwift Delhi NCR';
$active_nav = 'For Homeowners';
$base_path = '';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="iSwift provides personalized smart-home solutions, ideal for apartments, villas, farmhouses, and bungalows in Delhi, Gurgaon, Noida, Ghaziabad, Greater Noida & Delhi NCR.">
<meta name="keywords" content="smart home solutions, home automation for elderly, smart homes for families, remote home automation, smart living Delhi NCR">
HTML;
include __DIR__ . '/partials/header.php';
?>
<!-- Section 1: Hero Banner -->
    <section style="position: relative; height: 60vh; background-image: url('/assets/homeowners-hero.jpg'); background-size: cover; background-position: center;">
      <div style="position: absolute; inset: 0; background: rgba(0,42,34,0.75); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
        <h1 style="font-size: 48px; font-weight: 700; color: #FF6F40; margin-bottom: 16px;">Smart Homes Made for You</h1>
        <p style="font-size: 18px; font-weight: 400; max-width: 700px;">Enhance Your Everyday Living, Regardless of Your Home Type.</p>
      </div>
    </section>

    <!-- Section 2: Types of Homes -->
    <section style="padding: 96px 24px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 32px; max-width: 1200px; margin: auto;">
        <div class="card"><img src="/assets/apartment.jpg" alt="Apartment"><h3>Apartments</h3><p>Space-efficient solutions designed for urban apartment living.</p></div>
        <div class="card"><img src="/assets/villa.jpg" alt="Villa"><h3>Villas</h3><p>Elegant, scalable solutions for luxurious villa living.</p></div>
        <div class="card"><img src="/assets/farmhouse.jpg" alt="Farmhouse"><h3>Farmhouses</h3><p>Seamless control and comfort, even in remote locations.</p></div>
        <div class="card"><img src="/assets/bungalow.jpg" alt="Bungalow"><h3>Bungalows</h3><p>Sophisticated, integrated automation solutions for bungalows.</p></div>
      </div>
    </section>

    <!-- Section 3: Retrofit vs New Build -->
    <section style="padding: 96px 24px; display: flex; flex-wrap: wrap; gap: 32px; justify-content: center; max-width: 1200px; margin: auto;">
      <div class="highlight-box">
        <img src="/icons/retrofit-icon.svg" alt="Retrofit" style="height: 48px;">
        <h3>Retrofit</h3>
        <p>Upgrade your existing home easily with minimal disruption.</p>
      </div>
      <div class="highlight-box">
        <img src="/icons/newbuild-icon.svg" alt="New Build" style="height: 48px;">
        <h3>New Build</h3>
        <p>Plan smart-home integration seamlessly from the start.</p>
      </div>
    </section>

    <!-- Section 4: Scenario-Based Benefits -->
    <section style="padding: 96px 24px; max-width: 1000px; margin: auto;">
      <div style="display: flex; flex-direction: column; gap: 32px;">
        <div class="scenario"><img src="/icons/elderly-icon.svg" alt="Elderly"><div><h3>Elderly & Assisted Living</h3><p>Smart solutions ensuring safety, ease of access, and independence.</p></div></div>
        <div class="scenario"><img src="/icons/family-icon.svg" alt="Family"><div><h3>Family & Kids</h3><p>Enhanced home safety and easy monitoring, giving parents peace of mind.</p></div></div>
        <div class="scenario"><img src="/icons/travel-icon.svg" alt="Travel"><div><h3>Frequent Travelers</h3><p>Remote home monitoring and automation to manage your home securely from anywhere.</p></div></div>
      </div>
    </section>

    <!-- Section 5: Testimonial -->
    <section style="padding: 96px 24px; text-align: center;">
      <div style="background: rgba(255,255,255,0.04); padding: 32px; border-radius: 16px; max-width: 800px; margin: auto;">
        <blockquote style="font-size: 18px; line-height: 1.6;">"As frequent travelers, iSwift solutions have given us complete control over our home from anywhere in the world. Absolute peace of mind."</blockquote>
        <p style="margin-top: 16px; font-weight: 500; color: #FF6F40;">— Mr. & Mrs. Vikram Singh, Greater Noida</p>
      </div>
    </section>

    <!-- Section 6: CTA -->
    <section style="padding: 96px 24px; display: flex; flex-wrap: wrap; align-items: center; gap: 48px; background: rgba(255,255,255,0.02);">
      <div style="flex: 1 1 60%; min-width: 300px;">
        <h2 style="font-size: 36px; font-weight: 600; margin-bottom: 24px; color: #FF6F40;">Start Your Smart Home Journey Today</h2>
        <p style="font-size: 16px; color: #5A4033; margin-bottom: 24px;">Explore how iSwift can transform your home, customized precisely to your needs and lifestyle.</p>
        <div style="display: flex; gap: 16px; flex-wrap: wrap;">
          <a href="/book-demo.php" class="btn">Book Your Free Demo</a>
          <a href="/request-quote.php" class="btn">Request a Quote</a>
        </div>
      </div>
      <div style="flex: 1 1 35%; min-width: 280px;">
        <img src="/assets/family-consultation.jpg" alt="Family Consultation" style="width: 100%; border-radius: 16px;">
      </div>
    </section>

    <!-- Sticky WhatsApp CTA -->
    <a href="https://wa.me/919876543210?text=Hi, I'm interested in iSwift smart home automation." target="_blank" aria-label="Chat on WhatsApp"
       style="position: fixed; bottom: 24px; right: 24px; background-color: #FF6F40; border-radius: 50%; width: 56px; height: 56px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(0,0,0,0.3); z-index: 9999;">
      <img src="/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 24px;">
    </a>
  </main>

    .card, .highlight-box {
      background: rgba(255,255,255,0.04);
      border-radius: 16px;
      padding: 24px;
      text-align: center;
      transition: all 0.3s ease;
    }
    .card:hover, .highlight-box:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 20px rgba(103, 241, 180, 0.2);
    }
    .card img, .highlight-box img {
      width: 100%;
      border-radius: 12px;
      margin-bottom: 16px;
    }
    .highlight-box h3, .card h3 {
      font-size: 22px;
      font-weight: 600;
      color: #FF6F40;
      margin-bottom: 8px;
    }
    .highlight-box p, .card p {
      color: #5A4033;
      font-size: 16px;
    }
    .scenario {
      display: flex;
      align-items: flex-start;
      gap: 24px;
    }
    .scenario img {
      height: 48px;
    }
    .scenario h3 {
      font-size: 20px;
      color: #FF6F40;
      margin-bottom: 4px;
    }
    .btn {
      background-color: #FFB347;
      color: #3B1F0F;
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .btn:hover {
      filter: brightness(1.1);
      transform: scale(1.02);
    }
  </style>
<?php include __DIR__ . '/partials/footer.php'; ?>
