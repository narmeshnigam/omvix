<?php
declare(strict_types=1);
$page_title = 'Smart Water Controller for Homes | iSwift Automation Delhi NCR';
$active_nav = 'Solutions';
$base_path = '../';
$body_attrs = '';
$extra_head = <<<HTML
<meta name="description" content="Automate your water motor and prevent overflow with iSwift’s Smart Water Control System. Available in Delhi, Gurgaon, Noida, Ghaziabad & Greater Noida.">
HTML;
include __DIR__ . '/../partials/header.php';
?>
<section class="hero">
    <div class="hero-content">
      <h1>Let Technology Handle Your Water Motor</h1>
      <p>Automate tank filling, stop overflows, and control your motor remotely with iSwift's Smart Water Controller.</p>
      <button class="btn">Automate Your Water System</button>
    </div>
  </section>

  <section class="section grid-2">
    <div class="card app-preview">
      <img src="smart-water-app-ui.jpg" alt="App UI Preview">
    </div>
    <div>
      <h2>What Is a Smart Water Controller?</h2>
      <p>A smart water controller automates your home’s water motor system. It detects water levels in the tank and activates or deactivates the motor accordingly. Remote controls and schedule settings add unmatched ease and protection.</p>
    </div>
  </section>

  <section class="section">
    <h2>Core Benefits</h2>
    <div class="grid-3">
      <div class="card"><h3>Automatic Motor On/Off</h3><p>Prevents dry running or overflow automatically</p></div>
      <div class="card"><h3>Mobile App Control</h3><p>Switch motor on/off from anywhere</p></div>
      <div class="card"><h3>Tank Level Detection</h3><p>Real-time view of current water level</p></div>
      <div class="card"><h3>Overflow Protection</h3><p>Cuts off motor when tank is full</p></div>
      <div class="card"><h3>Dry-Run Safety</h3><p>Stops motor if underground water not detected</p></div>
      <div class="card"><h3>Daily Scheduling</h3><p>Set preferred filling times for routine automation</p></div>
    </div>
  </section>

  <section class="section">
    <h2>Works With Most Homes & Pumps</h2>
    <p>Whether you have an overhead tank or borewell setup—our controller supports standard motors, submersible pumps, and multiple tank capacities.</p>
    <div class="grid-3">
      <div class="card">Borewell Pump</div>
      <div class="card">Overhead Tank</div>
      <div class="card">Float Sensor Unit</div>
    </div>
  </section>

  <section class="section">
    <h2>Monitor & Control in Real Time</h2>
    <div class="grid-2">
      <div class="card app-preview">
        <img src="app-water-level.jpg" alt="Water Level Screen">
      </div>
      <div class="card app-preview">
        <img src="app-motor-switch.jpg" alt="Remote Motor Control">
      </div>
    </div>
    <p style="margin-top:24px; text-align:center; color: var(--text-muted);">Track usage, receive alerts, and control your motor—all from your smartphone.</p>
  </section>

  <section class="section">
    <h2>Real-Life Use Cases</h2>
    <div class="grid-3">
      <div class="card"><h3>Busy Households</h3><p>Avoid overflow when no one's home. Automation takes care of it.</p></div>
      <div class="card"><h3>Elderly-Friendly</h3><p>Eliminates the need to climb rooftops or handle unsafe switches.</p></div>
      <div class="card"><h3>Farmhouses/Villas</h3><p>Fill tanks before visits. No dry taps when you arrive.</p></div>
    </div>
  </section>

  <section class="section testimonial">
    <p><em>"I used to worry about forgetting to switch off the motor—now iSwift's system takes care of it all. My water bills are lower and my tank never overflows."</em></p>
    <p>— Mr. Raghav Seth, Independent Homeowner, Noida</p>
  </section>

  <section class="section">
    <h2>Ready to Automate Your Water Control?</h2>
    <div class="cta-buttons">
      <button class="btn">Request a Quote</button>
      <button class="btn">Chat on WhatsApp</button>
    </div>
  </section>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
