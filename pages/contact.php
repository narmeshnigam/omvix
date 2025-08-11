
<!-- Section 1: Hero Banner -->
  <section style="position: relative; height: 60vh; background-image: url('<?= BASE_URL ?>/assets/contact-hero.jpg'); background-size: cover; background-position: center;">
    <div style="position: absolute; inset: 0; background: rgba(0,42,34,0.75); display: flex; flex-direction: column; justify-content: center; padding-left: 5%;">
      <h1 style="font-size: 48px; font-weight: 700; color: #FF6F40;">Let’s Connect</h1>
      <p style="font-size: 18px; max-width: 500px;">Reach out for queries, guidance, or on-ground assistance.</p>
    </div>
  </section>

  <!-- Section 2: Address & Map -->
  <section style="padding: 96px 24px; display: flex; flex-wrap: wrap; gap: 32px; max-width: 1200px; margin: auto;">
    <div style="flex: 1 1 45%;">
      <h3 style="font-size: 22px; color: #FF6F40; margin-bottom: 16px;">iSwift Headquarters:</h3>
      <p>📍 XYZ Tower, Sector 62, Noida, Uttar Pradesh – 201301</p>
      <p>📞 +91 98765 43210</p>
      <p>✉️ contact@iswift.in</p>
      <p>🕒 Mon–Sat: 10 AM to 7 PM</p>
      <a href="https://www.google.com/maps" target="_blank" class="btn" style="margin-top: 24px; display: inline-block;">Get Directions</a>
    </div>
    <div style="flex: 1 1 50%; min-height: 320px;">
      <iframe src="https://www.google.com/maps/embed?..." width="100%" height="100%" frameborder="0" style="border-radius: 16px; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- Section 3: Contact Form -->
  <section style="padding: 96px 24px;">
    <div style="background: rgba(255,255,255,0.04); padding: 48px; max-width: 640px; margin: auto; border-radius: 16px;">
      <form style="display: grid; gap: 24px;">
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email Address" required>
        <input type="tel" placeholder="Phone Number" required>
        <textarea rows="4" placeholder="Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
      <p id="form-success" style="display: none; text-align: center; color: #FF6F40; margin-top: 16px;">Thank you! Our team will contact you shortly.</p>
    </div>
  </section>

  <!-- Section 4: Additional Contact Options -->
  <section style="padding: 96px 24px; display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 32px; max-width: 1200px; margin: auto;">
    <div class="card">
      <img src="<?= BASE_URL ?>/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 48px;">
      <h4>Chat on WhatsApp</h4>
      <p>Reach us instantly through WhatsApp for quick queries.</p>
      <a href="https://wa.me/919876543210?text=Hi, I’d like to inquire about smart home solutions." class="btn">Start Chat</a>
    </div>
    <div class="card">
      <img src="<?= BASE_URL ?>/icons/calendar-icon.svg" alt="Book Demo" style="height: 48px;">
      <h4>Book a Consultation</h4>
      <p>Schedule a session with our experts—online or in-person.</p>
      <a href="<?= BASE_URL ?>/book-demo" class="btn">Book Demo</a>
    </div>
    <div class="card">
      <img src="<?= BASE_URL ?>/icons/phone-icon.svg" alt="Call" style="height: 48px;">
      <h4>Call Us</h4>
      <p>Speak directly with our consultant team during working hours.</p>
      <a href="tel:+919876543210" class="btn">Call Now</a>
    </div>
    <div class="card">
      <img src="<?= BASE_URL ?>/icons/mail-icon.svg" alt="Email" style="height: 48px;">
      <h4>Email Support</h4>
      <p>Drop your message and we’ll respond within 24 hours.</p>
      <a href="mailto:contact@iswift.in" class="btn">Email Us</a>
    </div>
  </section>

  <!-- Section 5: FAQ Redirect -->
  <section style="padding: 48px 24px; background: rgba(255,255,255,0.02); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; max-width: 1200px; margin: auto;">
    <p style="font-size: 16px; color: #5A4033;">Have questions about our services? Explore our FAQs and Learn page.</p>
    <a href="<?= BASE_URL ?>/learn" class="btn">Visit Learn Page →</a>
  </section>

  <!-- Sticky WhatsApp CTA -->
  <a href="https://wa.me/919876543210?text=Hi, I’d like to inquire about smart home solutions." target="_blank" aria-label="Chat on WhatsApp"
     style="position: fixed; bottom: 24px; right: 24px; background-color: #FF6F40; border-radius: 50%; width: 56px; height: 56px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(0,0,0,0.3); z-index: 9999;">
    <img src="<?= BASE_URL ?>/assets/images/whatsapp.svg" alt="WhatsApp" style="height: 24px;">
  </a>



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
  .card {
    background: rgba(255,255,255,0.04);
    padding: 24px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.3s ease;
  }
  .card:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 20px rgba(103, 241, 180, 0.2);
  }
  form input, form textarea {
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #FF6F40;
    background: transparent;
    color: #FF6F40;
    font-family: 'Inter', sans-serif;
  }
</style>

