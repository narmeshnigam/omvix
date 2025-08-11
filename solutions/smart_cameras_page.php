<?php
declare(strict_types=1);
require __DIR__ . '/../bootstrap.php';
$page_title = 'Smart Home Security Cameras | iSwift Surveillance Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="iSwift smart cameras offer live video, alerts, and 2-way audio—secure your home today in Delhi, Gurgaon, Noida, Ghaziabad & Greater Noida.">
HTML;
require __DIR__ . '/../includes/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Smart Eyes on What Matters Most</h1>
      <p>iSwift smart cameras keep your home secure and accessible—anytime, anywhere.</p>
      <button class="btn">Secure Your Home With Smart Cameras</button>
    </div>
  </section>

  <section class="section grid-2">
    <div class="card">
      <img src="live-feed-ui.jpg" alt="Live Camera Feed" style="width:100%; border-radius:12px;">
    </div>
    <div>
      <h2>Your 24x7 Smart Security Partner</h2>
      <p>Smart cameras give you live access to your home, detect motion, send alerts, and record footage. Whether it’s your main gate, living room, or kid’s room—iSwift cameras let you stay connected and protected.</p>
    </div>
  </section>

  <section class="section">
    <h2>Types of Smart Cameras</h2>
    <div class="grid-3">
      <div class="card"><h3>Indoor Cameras</h3><p>Ideal for rooms, entryways, kids, or elder care.</p></div>
      <div class="card"><h3>Outdoor Cameras</h3><p>Weatherproof, day/night vision, perfect for gates/yards.</p></div>
      <div class="card"><h3>PTZ Cameras</h3><p>Remote-controlled movement for wide-area coverage.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Key Features</h2>
    <div class="grid-3">
      <div class="card"><h3>Live View on App</h3><p>See and hear what’s happening, anytime.</p></div>
      <div class="card"><h3>Night Vision</h3><p>Clear visibility even in pitch dark.</p></div>
      <div class="card"><h3>Motion Alerts</h3><p>Get real-time notifications for unexpected movements.</p></div>
      <div class="card"><h3>Cloud/SD Recording</h3><p>Choose between local card or secure cloud storage.</p></div>
      <div class="card"><h3>Multi-Cam Setup</h3><p>Monitor multiple rooms or areas simultaneously.</p></div>
      <div class="card"><h3>Two-Way Audio</h3><p>Talk and listen through your camera.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Smart Use Cases</h2>
    <div class="grid-3">
      <div class="card"><h3>Kids or Elderly Monitoring</h3><p>Check in on family members from your phone while at work.</p></div>
      <div class="card"><h3>Perimeter Protection</h3><p>See who's at the gate or driveway in real-time, anytime.</p></div>
      <div class="card"><h3>Vacation Surveillance</h3><p>Monitor your home from anywhere while you travel.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Control Every Angle From Your Phone</h2>
    <div class="slider">
      <div class="card"><img src="app-live-view.jpg" alt="Live View"></div>
      <div class="card"><img src="app-dashboard.jpg" alt="Multi-cam Dashboard"></div>
      <div class="card"><img src="app-playback.jpg" alt="Playback History"></div>
      <div class="card"><img src="app-alert-log.jpg" alt="Motion Alert Log"></div>
      <div class="card"><img src="app-two-way.jpg" alt="Two-Way Audio"></div>
    </div>
  </section>

  <section class="section testimonial">
    <p><em>"We’ve installed iSwift cameras inside and outside our home. We can check on the kids, answer the gate, and even talk through the camera—all from our phone."</em></p>
    <p>— Mr. & Mrs. Singh, Villa Owners, Gurgaon</p>
  </section>

  <section class="section">
    <h2>Protect What Matters—With a Single Tap</h2>
    <div class="cta-buttons">
      <button class="btn">Secure Your Home With Smart Cameras</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
