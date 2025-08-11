<?php
declare(strict_types=1);
require __DIR__ . '/../bootstrap.php';
$page_title = 'Smart Lighting Control for Homes | iSwift Automation Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Control your home’s lights via app, voice, or schedule. Book your smart lighting demo in Delhi, Gurgaon, Noida, Ghaziabad & Greater Noida.">
HTML;
require __DIR__ . '/../includes/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Light That Matches Your Mood</h1>
      <p>From morning freshness to evening calm—iSwift smart lighting adapts to your lifestyle.</p>
      <button class="btn">Book Lighting Setup Demo</button>
    </div>
  </section>

  <section class="section grid-2">
    <div>
      <h2>What Is Smart Lighting?</h2>
      <p>Smart lighting lets you control your home’s lights through voice, mobile app, or automated scenes. Adjust brightness, color temperature, or schedule lights to turn on/off based on your routine—without touching a switch.</p>
    </div>
    <div class="card">
      <img src="smart-lighting-app.jpg" alt="Smart Lighting App UI" style="width:100%; border-radius:12px;">
    </div>
  </section>

  <section class="section">
    <h2>Use Case Scenarios</h2>
    <div class="grid-3">
      <div class="card"><h3>Morning Routine</h3><p>Wake up with gradual light that simulates natural sunrise.</p></div>
      <div class="card"><h3>Movie Mode</h3><p>Dim all lights to soft glow with one tap for a theatre-like feel.</p></div>
      <div class="card"><h3>Away Mode</h3><p>Randomly turn on lights in the evening to simulate occupancy.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Key Features</h2>
    <div class="grid-3">
      <div class="card"><h3>Dimming & Brightness Control</h3><p>Fine-tune light levels for each room and time of day.</p></div>
      <div class="card"><h3>Scene Creation</h3><p>Save favorite setups like Dinner, Relax, Work.</p></div>
      <div class="card"><h3>Schedule-Based Automation</h3><p>Lights follow your daily routine—no manual effort.</p></div>
      <div class="card"><h3>App + Voice Control</h3><p>Control lights with Alexa, Google, or your phone.</p></div>
      <div class="card"><h3>Energy Optimization</h3><p>Reduce electricity usage with smart occupancy & time-based logic.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Lighting for Every Moment</h2>
    <div class="slider">
      <div class="card"><img src="relax-mode.jpg" alt="Relax Mode"><h3>Relax Mode</h3><p>Warm ambient lights in bedroom</p></div>
      <div class="card"><img src="work-mode.jpg" alt="Work Mode"><h3>Work Mode</h3><p>Bright cool white in study</p></div>
      <div class="card"><img src="party-mode.jpg" alt="Party Mode"><h3>Party Mode</h3><p>Mixed hues for living area</p></div>
      <div class="card"><img src="reading-mode.jpg" alt="Reading Mode"><h3>Reading Mode</h3><p>Focus light with reduced glare</p></div>
    </div>
    <div class="cta-buttons">
      <button class="btn">Explore Scene Options →</button>
    </div>
  </section>

  <section class="section">
    <h2>Designed for All Spaces</h2>
    <div class="grid-3">
      <div class="card">Retrofit wiring compatibility</div>
      <div class="card">Supports downlights, LEDs, strips, chandeliers</div>
      <div class="card">Control via app, panel, or voice</div>
    </div>
    <p style="margin-top:24px; text-align:center; color: var(--text-muted);">From 1BHK apartments to large villas, iSwift lighting works for every home.</p>
  </section>

  <section class="section testimonial">
    <p><em>"We start our mornings in soft light and wind down with warm tones—all without touching a switch. It's not just lighting; it's a better experience."</em></p>
    <p>— Mrs. Charu Desai, Duplex Owner, Gurgaon</p>
  </section>

  <section class="section">
    <h2>Let Your Lights Think For You</h2>
    <div class="cta-buttons">
      <button class="btn">Book Lighting Setup Demo</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
