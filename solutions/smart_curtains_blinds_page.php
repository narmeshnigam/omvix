<?php
declare(strict_types=1);
$page_title = 'Smart Curtains & Blinds | iSwift Home Automation Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Automate your curtains and blinds with voice or app-based control. Book a demo with iSwift for Delhi, Gurgaon, Noida, Ghaziabad & Greater Noida homes.">
HTML;
include __DIR__ . '/../partials/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Curtains That Move With You</h1>
      <p>Automate natural light, privacy, and luxury with iSwift's motorized curtain & blind systems.</p>
      <button class="btn">Explore Curtain Solutions</button>
    </div>
  </section>

  <section class="section grid-2">
    <div>
      <h2>Motorized Curtains & Blinds—Made Simple</h2>
      <p>Smart curtains open or close based on schedule, voice command, app, or wall panel. iSwift offers track motors, roller blinds, Roman shades and more—tailored to your interior and lifestyle.</p>
    </div>
    <div class="card">
      <img src="curtain-motion.jpg" alt="Curtain In Motion" style="width:100%; border-radius:12px;">
    </div>
  </section>

  <section class="section">
    <h2>Smart Use Cases</h2>
    <div class="grid-3">
      <div class="card"><h3>Wake-up Scene</h3><p>Let morning light gently pull open your drapes to wake you up naturally.</p></div>
      <div class="card"><h3>Privacy at Sunset</h3><p>Automatically close blinds when the sun sets or lights turn on.</p></div>
      <div class="card"><h3>Child-Friendly Comfort</h3><p>No cords, no tugging—safe and clean automation for every age.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Multiple Ways to Control</h2>
    <div class="grid-3">
      <div class="card">App Control</div>
      <div class="card">Voice Assistants</div>
      <div class="card">Scene Activation</div>
      <div class="card">Remote Control</div>
      <div class="card">Timer/Scheduler</div>
      <div class="card">Sunlight Sensor</div>
    </div>
  </section>

  <section class="section">
    <h2>Types of Curtains & Blinds</h2>
    <div class="slider">
      <div class="card"><img src="track-motor.jpg" alt="Track Motors"><h3>Track Motors</h3><p>For traditional sliding curtains</p></div>
      <div class="card"><img src="roller-blinds.jpg" alt="Roller Blinds"><h3>Roller Blinds</h3><p>Perfect for modern, clean look</p></div>
      <div class="card"><img src="roman-shades.jpg" alt="Roman Shades"><h3>Roman Shades</h3><p>Soft folds for classic interiors</p></div>
    </div>
  </section>

  <section class="section">
    <h2>See It in Action</h2>
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/example" title="Smart Curtain Demo" allowfullscreen></iframe>
    </div>
  </section>

  <section class="section testimonial">
    <p><em>"I wake up with natural light every day. The curtains close at night automatically. It’s elegance I didn’t know I needed."</em></p>
    <p>— Ms. Aastha Mehta, Apartment Owner, Greater Noida</p>
  </section>

  <section class="section">
    <h2>Automate Elegance With a Touch</h2>
    <div class="cta-buttons">
      <button class="btn">Book a Free Curtain Demo</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
