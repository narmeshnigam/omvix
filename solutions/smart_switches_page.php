<?php
declare(strict_types=1);
$page_title = 'Smart Switches & Control Panels | iSwift Home Automation in Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Upgrade to stylish, app-enabled, and voice-controlled smart switches. Explore iSwift’s elegant switch panels in Delhi, Gurgaon, Noida, Ghaziabad & Greater Noida.">
HTML;
include __DIR__ . '/../partials/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Redefine the Way You Control Your Home</h1>
      <p>Switch to elegance, intelligence, and control—with iSwift’s smart switch systems.</p>
      <button class="btn" onclick="document.getElementById('features').scrollIntoView({behavior: 'smooth'})">See Smart Panel Options</button>
    </div>
  </section>

  <section class="section two-column">
    <div class="text">
      <h2>What Are Smart Switches & Control Panels?</h2>
      <p>Smart switches replace traditional ones with stylish panels that let you control lights, fans, appliances—and entire scenes—with a touch, your voice, or the iSwift app. Retrofit-compatible or available in modular builds for new homes.</p>
    </div>
    <div class="image">
      <img src="smart-switch-closeup.jpg" alt="Smart Switch Panel">
    </div>
  </section>

  <section class="section">
    <h2>Top Use Cases</h2>
    <div class="grid-2x2">
      <div class="card"><h3>Voice & App Control</h3><p>Switch appliances via Alexa, Google, or mobile app.</p></div>
      <div class="card"><h3>Scene-Based Switching</h3><p>Create morning, night, or party lighting scenes.</p></div>
      <div class="card"><h3>Child Lock & Safety</h3><p>Disable switches when not needed for safety.</p></div>
      <div class="card"><h3>Multi-Room Integration</h3><p>Control multiple rooms from one panel or app.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Designed for Indian Homes</h2>
    <ul>
      <li>Compatible with standard Indian switch wiring</li>
      <li>Works with lights, fans, exhausts, sockets, geysers</li>
      <li>Retrofit models don’t require wall breaking</li>
      <li>Supports modular switch panel integration</li>
    </ul>
  </section>

  <section class="section feature-strip" id="features">
    <h2>Smart Panel Features</h2>
    <div class="grid-2x2">
      <div class="card"><h3>Capacitive Touch Panel</h3><p>Sleek, modern surface with backlit controls</p></div>
      <div class="card"><h3>Real-Time App Sync</h3><p>See current switch status from anywhere</p></div>
      <div class="card"><h3>Remote On/Off Scheduling</h3><p>Automate appliance use with daily schedules</p></div>
      <div class="card"><h3>Scene Activation Button</h3><p>Assign custom scenes to switch buttons</p></div>
      <div class="card"><h3>Energy Monitoring (optional)</h3><p>Track usage per switch circuit</p></div>
    </div>
  </section>

  <section class="section gallery">
    <h2>See Our Switches in Action</h2>
    <div class="grid-2x2">
      <img src="install-1.jpg" alt="Living Room Setup">
      <img src="install-2.jpg" alt="Bedroom Panel">
      <img src="install-3.jpg" alt="Kitchen Control Panel">
      <img src="install-4.jpg" alt="Corridor Lighting Panel">
    </div>
    <div class="cta-buttons">
      <button class="btn">Book a Demo to Experience Live Setup</button>
    </div>
  </section>

  <section class="section testimonial">
    <p><em>"The iSwift panels feel like part of our interior—responsive, luxurious, and completely smart."</em></p>
    <p>— Mr. Sahil Verma, Apartment Owner, Gurgaon</p>
  </section>

  <section class="section cta-strip">
    <h2>Upgrade Your Walls to Smart Panels Today</h2>
    <div class="cta-buttons">
      <button class="btn">Request a Quote</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
