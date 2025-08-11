<?php
require __DIR__ . '/bootstrap.php';
$page_title = 'Book a Demo | Omvix';
require __DIR__ . '/includes/header.php';
?>
    <!-- Section 1: Hero Banner -->
    <section style="position: relative; height: 60vh; background-image: url('<?= BASE_URL ?>/assets/demo-hero.jpg'); background-size: cover; background-position: center;">
      <div style="position: absolute; inset: 0; background: rgba(0,42,34,0.75); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
        <h1 style="font-size: 48px; font-weight: 700; color: #FF6F40;">Book Your Free Smart Home Consultation</h1>
        <p style="font-size: 18px; font-weight: 400; max-width: 700px;">Talk to our experts—online or on-site—for personalized guidance.</p>
      </div>
    </section>

    <!-- Section 2: What to Expect -->
    <section style="padding: 96px 24px; max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; gap: 32px; justify-content: center;">
      <div class="step-card">
        <img src="<?= BASE_URL ?>/icons/property-type-icon.svg" alt="Choose Property" style="height: 48px;">
        <h3>1. Choose Property Type</h3>
        <p>Let us know if it’s an apartment, villa, bungalow or farmhouse.</p>
      </div>
      <div class="step-card">
        <img src="<?= BASE_URL ?>/icons/calendar-icon.svg" alt="Pick Time" style="height: 48px;">
        <h3>2. Pick Time & Mode</h3>
        <p>Book a convenient slot—virtual or in-person visit.</p>
      </div>
      <div class="step-card">
        <img src="<?= BASE_URL ?>/icons/advice-icon.svg" alt="Get Advice" style="height: 48px;">
        <h3>3. Get Expert Advice</h3>
        <p>Our consultant walks you through options based on your needs.</p>
      </div>
    </section>

    <!-- Section 3: Booking Form -->
    <section style="padding: 96px 24px;">
      <div style="background: rgba(255,255,255,0.04); padding: 48px; max-width: 640px; margin: auto; border-radius: 16px;">
        <form style="display: grid; gap: 24px;">
          <input type="text" placeholder="Full Name" required>
          <input type="email" placeholder="Email Address" required>
          <input type="tel" placeholder="Phone Number" required>
          <select required>
            <option disabled selected>Property Type</option>
            <option>Apartment</option>
            <option>Villa</option>
            <option>Bungalow</option>
            <option>Farmhouse</option>
          </select>
          <select required>
            <option disabled selected>Preferred Consultation Mode</option>
            <option>Video Call</option>
            <option>In-Person Visit</option>
          </select>
          <input type="date" placeholder="Preferred Date" required>
          <input type="time" placeholder="Preferred Time" required>
          <textarea rows="4" placeholder="Message / Additional Info"></textarea>
          <button type="submit" class="btn">Schedule My Demo</button>
        </form>
      </div>
    </section>

    <!-- Section 4: WhatsApp Booking CTA -->
    <section style="padding: 96px 24px; background: rgba(255,255,255,0.02); display: flex; flex-wrap: wrap; align-items: center; gap: 48px;">
      <div style="flex: 1 1 60%;">
        <h2 style="font-size: 32px; font-weight: 600; color: #FF6F40; margin-bottom: 16px;">Prefer Quick Booking on WhatsApp?</h2>
        <p style="font-size: 16px; color: #5A4033; margin-bottom: 24px;">Simply drop us a message and our team will confirm your slot.</p>
        <a href="https://wa.me/919876543210?text=Hi, I’d like to book a demo with iSwift." target="_blank" class="btn">Book via WhatsApp</a>
      </div>
      <div style="flex: 1 1 35%; min-width: 280px;">
        <img src="<?= BASE_URL ?>/assets/whatsapp-booking.jpg" alt="WhatsApp Booking" style="width: 100%; border-radius: 16px;">
      </div>
    </section>

    <!-- Section 5: Social Proof Strip -->
    <section style="padding: 48px 24px; text-align: center;">
      <p style="font-size: 16px; color: #5A4033; margin-bottom: 16px;">Trusted by Homeowners and Professionals in Delhi NCR</p>
      <div style="display: flex; gap: 24px; justify-content: center; flex-wrap: wrap;">
        <img src="<?= BASE_URL ?>/logos/yale.svg" alt="Yale" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/godrej.svg" alt="Godrej" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/qubo.svg" alt="Qubo" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/tplink.svg" alt="TP-Link" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/netgear.svg" alt="Netgear" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/alexa.svg" alt="Alexa" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/google-home.svg" alt="Google Home" class="brand-logo">
        <img src="<?= BASE_URL ?>/logos/siri.svg" alt="Siri" class="brand-logo">
      </div>
    </section>

    <!-- Sticky WhatsApp CTA -->
    <a href="https://wa.me/919876543210?text=Hi, I’d like to book a demo with iSwift." target="_blank" aria-label="Chat on WhatsApp"
       style="position: fixed; bottom: 24px; right: 24px; background-color: #FF6F40; border-radius: 50%; width: 56px; height: 56px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(0,0,0,0.3); z-index: 9999;">
      <img src="<?= BASE_URL ?>/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 24px;">
    </a>
  

  <!-- Footer Include -->
    .step-card {
      background: rgba(255,255,255,0.04);
      padding: 24px;
      border-radius: 16px;
      text-align: center;
      flex: 1 1 280px;
    }
    .step-card h3 {
      color: #FF6F40;
      font-size: 20px;
      margin-top: 12px;
      margin-bottom: 8px;
    }
    .step-card p {
      color: #5A4033;
      font-size: 16px;
    }
    form input, form select, form textarea {
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #FF6F40;
      background: transparent;
      color: #FF6F40;
      font-family: 'Inter', sans-serif;
    }
    form textarea { resize: vertical; }
    .btn {
      background-color: #FFB347;
      color: #3B1F0F;
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
      text-align: center;
    }
    .btn:hover {
      filter: brightness(1.1);
      transform: scale(1.02);
    }
    .brand-logo {
      height: 32px;
      opacity: 0.4;
      transition: all 0.3s ease;
    }
    .brand-logo:hover {
      opacity: 1;
    }
  </style>

<?php require __DIR__ . '/includes/footer.php'; ?>
