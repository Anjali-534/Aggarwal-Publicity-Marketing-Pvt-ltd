<?php
$page_title = 'Contact Us';
$base = APM_CONFIG['base_url'];
$success_msg = '';
$error_msg = '';

// Handle server-side form submission (non-AJAX fallback)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apm_contact'])) {
    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $phone   = trim(strip_tags($_POST['phone']   ?? ''));
    $product = trim(strip_tags($_POST['product'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    if (strlen($name) < 2 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($message) < 10) {
        $error_msg = 'Please fill all required fields correctly.';
    } else {
        $to      = APM_CONFIG['email'];
        $subject = "New Inquiry from APM Website – $name";
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\nProduct: $product\n\nMessage:\n$message";
        $headers  = "From: no-reply@aggarwalpublicity.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
mail($to, $subject, $body, $headers);
        $success_msg = 'Thank you! Your inquiry has been received. We will contact you within 24 hours.';
    }
}
?>

<?php apm_page_banner('Get In <span>Touch</span>', 'Our team is ready to assist with product inquiries, bulk pricing, technical specifications, and order placement.', 'Contact'); ?>

<section class="section-pad bg-off">
  <div class="container">
    <div class="contact-layout">

      <!-- Form -->
      <div>
        <div class="contact-form-card">
          <div class="section-label">Send an Inquiry</div>
          <h2 class="section-title" style="font-size:clamp(28px,4vw,42px);margin-bottom:24px">Request a <span>Quote</span></h2>

          <?php if ($success_msg) : ?>
          <div style="padding:14px 18px;background:rgba(37,211,102,.1);border:1px solid rgba(37,211,102,.3);border-radius:var(--radius);color:#1a9550;font-size:14px;margin-bottom:18px"><?php echo htmlspecialchars($success_msg); ?></div>
          <?php endif; ?>
          <?php if ($error_msg) : ?>
          <div id="form-error" style="padding:14px 18px;background:rgba(192,57,43,.08);border:1px solid rgba(192,57,43,.25);border-radius:var(--radius);color:var(--red);font-size:14px;margin-bottom:18px"><?php echo htmlspecialchars($error_msg); ?></div>
          <?php else : ?>
          <div id="form-error" style="display:none;padding:14px 18px;background:rgba(192,57,43,.08);border:1px solid rgba(192,57,43,.25);border-radius:var(--radius);color:var(--red);font-size:14px;margin-bottom:18px"></div>
          <?php endif; ?>

          <form id="apm-contact-form" method="POST" action="<?php echo $base; ?>/contact" novalidate>
            <input type="hidden" name="apm_contact" value="1">
            <div class="form-row-2">
              <div class="form-group">
                <label class="form-label" for="name">Full Name *</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Your full name" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email Address *</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="your@company.com" required>
              </div>
            </div>
            <div class="form-row-2">
              <div class="form-group">
                <label class="form-label" for="phone">Phone Number</label>
                <input class="form-control" type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX">
              </div>
              <div class="form-group">
                <label class="form-label" for="product">Product Interest</label>
                <select class="form-control" id="product" name="product">
                  <option value="">— Select a product —</option>
                  <option>Paraformaldehyde 91%</option>
                  <option>Paraformaldehyde 96%</option>
                  <option>Spray Chemicals</option>
                  <option>Melamine</option>
                  <option>Phthalic Acid</option>
                  <option>Multiple Products</option>
                  <option>General Inquiry</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="message">Your Message *</label>
              <textarea class="form-control" id="message" name="message" placeholder="Please describe your requirement — quantity, grade, delivery location, timeline..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg">📩 Send Inquiry</button>
            <div id="form-success" class="form-success-msg">✅ Thank you! Your inquiry has been received. We will contact you within 24 hours.</div>
          </form>
        </div>
      </div>

      <!-- Info Cards -->
      <div>
        <div class="contact-info-cards">
          <div class="contact-info-card">
            <div class="contact-icon">📍</div>
            <div>
              <h4>Our Address</h4>
              <p><?php echo htmlspecialchars(APM_CONFIG['address']); ?></p>
            </div>
          </div>
          <div class="contact-info-card">
            <div class="contact-icon">📞</div>
            <div>
              <h4>Call Us</h4>
              <p><a href="tel:<?php echo preg_replace('/\s+/', '', APM_CONFIG['phone']); ?>" style="color:var(--sky)"><?php echo htmlspecialchars(APM_CONFIG['phone']); ?></a><br><small style="color:var(--grey)">Mon–Sat: 9:00 AM – 6:00 PM</small></p>
            </div>
          </div>
          <div class="contact-info-card">
            <div class="contact-icon">📧</div>
            <div>
              <h4>Email Us</h4>
              <p><a href="mailto:<?php echo htmlspecialchars(APM_CONFIG['email']); ?>" style="color:var(--sky)"><?php echo htmlspecialchars(APM_CONFIG['email']); ?></a><br><small style="color:var(--grey)">Response within 24 hours</small></p>
            </div>
          </div>
          <div class="contact-info-card">
            <div class="contact-icon">💬</div>
            <div>
              <h4>WhatsApp</h4>
              <p><a href="https://wa.me/<?php echo htmlspecialchars(APM_CONFIG['whatsapp']); ?>" target="_blank" rel="noopener" style="color:var(--sky)">Chat on WhatsApp</a><br><small style="color:var(--grey)">Quick responses during business hours</small></p>
            </div>
          </div>
        </div>

        <div class="map-embed" style="margin-top:24px">
          <div class="map-icon">🗺️</div>
          <p><strong style="color:var(--navy)">8145/2, Street No: 7, Arakashan Rd, near Hotel White House, Multani Dhanda, Paharganj</strong><br>New Delhi – 110020, India<br><br>
          <a href="https://maps.app.goo.gl/H7iL6aB37J9SU2JHA" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="margin-top:10px;display:inline-flex">📍 Open in Google Maps</a></p>
        </div>
      </div>

    </div>
  </div>
</section>
