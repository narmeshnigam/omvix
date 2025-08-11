<?php
declare(strict_types=1);
require __DIR__ . '/../bootstrap.php';
$page_title = 'Smart Door Locks for Homes | iSwift Automation Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Keyless entry, remote access, app control, and security logging—iSwift smart locks provide modern protection in Delhi, Gurgaon, Noida, Ghaziabad & Greater Noida.">
HTML;
require __DIR__ . '/../includes/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Unlock the Future of Home Security</h1>
      <p>Smart Door Locks that bring you safety, control, and elegance—right at your entrance.</p>
      <button class="btn" onclick="document.getElementById('features').scrollIntoView({behavior: 'smooth'})">Compare Smart Locks</button>
    </div>
  </section>

  <section class="section">
    <h2>What Is a Smart Door Lock?</h2>
    <div class="card">
      <p>Smart locks replace traditional locks with keyless systems. Control your door with a fingerprint, PIN, RFID, mobile app—or even remotely while you're away. Enhanced security meets modern convenience.</p>
      <img src="smart-lock-access-methods.jpg" alt="Smart Lock Access Methods" style="width:100%; border-radius: 12px; margin-top:16px;">
    </div>
  </section>

  <section class="section">
    <h2>Multiple Ways to Unlock</h2>
    <p>Flexible entry methods for every member of your household.</p>
    <div class="grid-2x3">
      <div class="card icon-glow"><h3>Fingerprint</h3></div>
      <div class="card icon-glow"><h3>PIN Code</h3></div>
      <div class="card icon-glow"><h3>RFID Card</h3></div>
      <div class="card icon-glow"><h3>Mobile App</h3></div>
      <div class="card icon-glow"><h3>OTP Access</h3></div>
      <div class="card icon-glow"><h3>Mechanical Key</h3></div>
    </div>
  </section>

  <section class="section" id="features">
    <h2>Key Features</h2>
    <div class="grid-2x3">
      <div class="card"><h3>Remote Unlock</h3><p>Open the door remotely for guests or deliveries.</p></div>
      <div class="card"><h3>Guest Access (OTP)</h3><p>Provide one-time PINs to friends, house help, or maintenance staff.</p></div>
      <div class="card"><h3>Auto Lock Function</h3><p>Ensures your door is locked automatically when closed.</p></div>
      <div class="card"><h3>App Notifications & Logs</h3><p>Track who entered, when, and how—directly from your phone.</p></div>
      <div class="card"><h3>Battery Backup Alerts</h3><p>Low battery reminders + emergency key support.</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Integrates With Your Security Ecosystem</h2>
    <div class="highlight">
      <p>Pair your smart door lock with iSwift's video door systems and Wi-Fi mesh for seamless, secure access—even when you're not home.</p>
      <p>🔒 + 📬 + 📱 = Complete Entry Security</p>
    </div>
  </section>

  <section class="section logo-strip">
    <h2>Compatible Brands</h2>
    <div style="display: flex; overflow-x: auto; padding: 16px 0;">
      <img src="logo-yale.png" alt="Yale">
      <img src="logo-godrej.png" alt="Godrej">
      <img src="logo-qubo.png" alt="Qubo">
      <img src="logo-lavna.png" alt="LAVNA">
      <img src="logo-others.png" alt="Other Brands">
    </div>
  </section>

  <section class="section">
    <h2>Real-Life Scenarios</h2>
    <div class="grid-3x1">
      <div class="card"><h3>Kids Returning from School</h3><p>Ensure safe entry using fingerprint—no key dependency.</p></div>
      <div class="card"><h3>House Help Entry</h3><p>Give daily access at fixed times, with logs tracked via app.</p></div>
      <div class="card"><h3>Vacation Mode</h3><p>Temporarily disable local access and receive alerts on forced attempts.</p></div>
    </div>
  </section>

  <section class="section testimonial">
    <p><em>"I no longer worry about lost keys. My kids and house staff all have their own access methods—and I see logs in real time."</em></p>
    <p>— Mrs. Tanya Ahuja, Villa Owner, Noida</p>
  </section>

  <section class="section">
    <h2>Explore the Best Lock for Your Door</h2>
    <div class="cta-buttons">
      <button class="btn">Compare Smart Locks</button>
      <button class="btn">Get Door Lock Quote</button>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
