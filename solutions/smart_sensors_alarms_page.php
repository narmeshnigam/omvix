<?php
declare(strict_types=1);
require __DIR__ . '/../bootstrap.php';
$page_title = 'Smart Sensors & Alarms | iSwift Home Safety Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Protect your home with smart motion, gas, smoke, and water leak sensors. iSwift offers quick alerts and automation for homes in Delhi, Gurgaon, Noida & NCR.">
HTML;
require __DIR__ . '/../includes/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Your Home’s Silent Guardians</h1>
      <p>From motion to gas leaks, iSwift’s smart sensors keep you alert and protected—wherever you are.</p>
      <button class="btn">Get Your Home Sensor-Fitted</button>
    </div>
  </section>

  <section class="section">
    <h2>Types of Smart Sensors</h2>
    <div class="grid-3">
      <div class="card"><h3>Motion Sensor</h3><p>Detects unexpected movement in selected zones.</p></div>
      <div class="card"><h3>Door/Window Sensor</h3><p>Triggers alert when a door/window opens.</p></div>
      <div class="card"><h3>Smoke Detector</h3><p>Notifies in case of fire or overheating.</p></div>
      <div class="card"><h3>Gas Leak Sensor</h3><p>Detects LPG/CNG leaks and sends immediate alert.</p></div>
      <div class="card"><h3>Water Leak Sensor</h3><p>Alerts when water leakage is detected near tanks or under sinks.</p></div>
      <div class="card"><h3>Sirens / Sound Alarms</h3><p>Trigger audio alarm with sensors or manually.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Key Use Cases</h2>
    <div class="grid-3">
      <div class="card"><h3>Night-Time Monitoring</h3><p>Get alerts if movement is detected in common areas past bedtime.</p></div>
      <div class="card"><h3>Kitchen & Utility Safety</h3><p>Detect gas leaks or short circuits before they become dangerous.</p></div>
      <div class="card"><h3>Automation Triggers</h3><p>Turn on lights when motion is detected in hallways or bathrooms.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Stay Informed Instantly</h2>
    <div class="highlight">
      <p>When a sensor detects any activity, iSwift instantly notifies you on your app. You can also link it to other smart devices like cameras, sirens, or lights.</p>
      <img src="app-alert-ui.jpg" alt="Smart Sensor Alerts" style="width:100%; border-radius:12px; margin-top:16px;">
    </div>
  </section>

  <section class="section">
    <h2>Integration Capabilities</h2>
    <div class="grid-2">
      <div class="card"><h3>Lights</h3><p>Turn on passage lights automatically when motion is detected.</p></div>
      <div class="card"><h3>Cameras</h3><p>Auto-record events when motion or door opening is detected.</p></div>
      <div class="card"><h3>Sirens</h3><p>Activate siren if motion is detected while in vacation mode.</p></div>
      <div class="card"><h3>Smart Notifications</h3><p>Receive app alert, sound, and vibration instantly.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Easy to Add, Hard to Live Without</h2>
    <p>Retrofit-friendly, wireless and plug-powered options. Works in apartments, villas, kitchens, washrooms, balconies, entrances, etc. All sensors are app-integrated and tested.</p>
    <div class="grid-3">
      <div class="card">Wireless + Plug-powered</div>
      <div class="card">Retrofit-Friendly for Any Home</div>
      <div class="card">Instant App Integration</div>
    </div>
  </section>

  <section class="section testimonial">
    <p><em>"The motion sensor near our balcony helped us spot an intrusion attempt—and the camera auto-recorded everything. Can’t imagine living without it now."</em></p>
    <p>— Mr. Vinay Sharma, Builder Floor Owner, Delhi</p>
  </section>

  <section class="section">
    <h2>Sensor-Fit Your Home for Peace of Mind</h2>
    <div class="cta-buttons">
      <button class="btn">Get Your Home Sensor-Fitted</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
