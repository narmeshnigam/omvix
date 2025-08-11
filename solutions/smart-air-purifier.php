<?php
declare(strict_types=1);
$page_title = 'Smart Air Purifiers | App-Controlled HEPA Air Cleaners by iSwift';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Breathe clean air at home with iSwift Smart Air Purifiers. Monitor AQI, automate purification, and enjoy silent operation—available across Delhi NCR.">
HTML;
include __DIR__ . '/../partials/header.php';
?>
<section class="hero">
    <div>
      <h1>Breathe Smart. Live Pure.</h1>
      <p>Monitor and purify your air automatically—with iSwift smart air purifiers designed for Indian homes.</p>
      <button class="btn">Book Air Purifier Consultation</button>
    </div>
  </section>

  <section class="section grid-2">
    <div>
      <img src="purifier-device-app.jpg" alt="Purifier and App AQI" />
    </div>
    <div>
      <h2>Intelligent Purification That Adapts to You</h2>
      <p>A smart air purifier monitors your home’s air quality (PM2.5, PM10, VOCs), adjusts its speed in real-time, and lets you control it from your phone or with voice commands. You can even schedule it or link to a smart scene.</p>
    </div>
  </section>

  <section class="section">
    <h2>Key Benefits</h2>
    <div class="grid-2">
      <div class="card"><h3>Real-Time AQI Monitoring</h3><p>Check your indoor air quality live via mobile.</p></div>
      <div class="card"><h3>Auto Mode</h3><p>Device adjusts fan speed automatically as pollution changes.</p></div>
      <div class="card"><h3>Quiet Operation</h3><p>Silent night mode ensures zero disturbance while you sleep.</p></div>
      <div class="card"><h3>App & Voice Control</h3><p>Turn on/off, switch modes, and monitor from anywhere.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Ideal Use Cases</h2>
    <div class="slider">
      <div class="card"><h3>Kids & Elderly Rooms</h3><p>Ensure clean breathing for your family’s most sensitive members.</p></div>
      <div class="card"><h3>Bedrooms & Living Areas</h3><p>Let fresh air circulate while keeping pollutants away from you.</p></div>
      <div class="card"><h3>Post-Construction or Dusty Areas</h3><p>Remove VOCs and airborne particles from fresh renovations.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Built for Intelligent Performance</h2>
    <div class="grid-3">
      <div class="card"><h3>HEPA + Activated Carbon</h3><p>Dual-layer filtration removes PM2.5, pollen, smoke, and odors.</p></div>
      <div class="card"><h3>App Control</h3><p>Adjust settings, monitor AQI, and schedule remotely.</p></div>
      <div class="card"><h3>Filter Change Alerts</h3><p>Get notified when a replacement is needed.</p></div>
      <div class="card"><h3>Child Lock</h3><p>Keep settings safe from accidental changes.</p></div>
      <div class="card"><h3>Timer / Scheduler</h3><p>Run during sleep, morning, or away hours.</p></div>
      <div class="card"><h3>Night Mode</h3><p>Low-speed, no-glow mode for bedrooms.</p></div>
    </div>
  </section>

  <section class="section">
    <img src="aqi-transition.jpg" alt="AQI Before After Visualization" />
    <button class="btn">See Real-Time Air Purification Demo</button>
  </section>

  <section class="section testimonial">
    <p><em>“My daughter has allergies and iSwift’s purifier made a real difference. We monitor AQI every day—it’s clean, and I sleep better.”</em></p>
    <p>— Mrs. Aditi Sharma, Apartment Owner, Delhi</p>
  </section>

  <section class="section">
    <h2>Purify Your Home’s Air the Smarter Way</h2>
    <div class="cta-buttons">
      <button class="btn">Book Air Purifier Consultation</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
