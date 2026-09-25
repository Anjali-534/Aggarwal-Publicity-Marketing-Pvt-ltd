<?php
require APM_ROOT . '/includes/PHPMailer/src/Exception.php';
require APM_ROOT . '/includes/PHPMailer/src/PHPMailer.php';
require APM_ROOT . '/includes/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$page_title  = 'Contact Us';
$base        = APM_BASE_URL;
$meta_description = 'Contact Aggarwal Publicity & Marketing Pvt. Ltd. — chemical supplier and trader in Delhi NCR, India.';
$meta_keywords     = 'chemical supplier Delhi NCR contact, industrial chemicals trader New Delhi';
$success_msg = '';
$error_msg   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apm_contact'])) {
    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $phone   = trim(strip_tags($_POST['phone']   ?? ''));
    $product = trim(strip_tags($_POST['product'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    if (strlen($name) < 2 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($message) < 10) {
        $error_msg = 'Please fill all required fields correctly.';
    } else {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'inquiry@aggarwalpublicity.com';
            $mail->Password   = 'House@534';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('inquiry@aggarwalpublicity.com', 'APM Chemical Website');
            $mail->addAddress('aggarwalpublicity@gmail.com');
            $mail->addReplyTo($email, $name);
            $mail->Subject = "New Inquiry from APM Website – $name";
            $mail->Body    = "Name: $name\nEmail: $email\nPhone: $phone\nProduct: $product\n\nMessage:\n$message";
            $mail->send();
            $success_msg = 'Thank you! Your inquiry has been received. We will contact you within 24 hours.';
        } catch (Exception $e) {
            $error_msg = 'Mail could not be sent. Please call us directly.';
        }
    }
}
?>

<?php apm_page_banner('Get In <span>Touch</span>', 'Our team is ready to assist with product inquiries, bulk pricing, technical specifications, and order placement.', 'Contact', 'APM_GROUP_logo_reveal_video_20260925133646.mp4'); ?>

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
<p>
  <strong style="font-size:11px;letter-spacing:1px;text-transform:uppercase;font-family:'Space Grotesk',sans-serif;color:var(--sky)">Head Office</strong><br>
  <?php echo htmlspecialchars(APM_CONFIG['address']); ?>
</p>
<p style="margin-top:10px">
  <strong style="font-size:11px;letter-spacing:1px;text-transform:uppercase;font-family:'Space Grotesk',sans-serif;color:var(--sky)">Warehouse</strong><br>
  15/5 Gali No. 12, Near Shree Ram Properties, Swaroop Nagar, Delhi – 110042
</p>
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

       <!-- Address Cards -->
<div style="margin-top:24px;display:grid;grid-template-columns:1fr 1fr;gap:16px">

  <!-- Head Office Card -->
  <div style="background:var(--white);border:1px solid rgba(11,31,58,.1);border-radius:var(--radius-md);padding:20px;box-shadow:var(--shadow-sm)">
    <div style="display:flex;align-items:center;gap:8px;margin-bottom:10px">
      <span style="width:32px;height:32px;background:rgba(46,127,193,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:16px">🏢</span>
      <strong style="font-family:'Space Grotesk',sans-serif;font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:var(--sky)">Head Office</strong>
    </div>
    <p style="font-size:13px;color:var(--grey);line-height:1.6;margin-bottom:14px">8145/2, Street No: 7, Arakashan Rd, near Hotel White House, Multani Dhanda, Paharganj, New Delhi – 110055</p>
    <div style="display:flex;gap:8px;flex-wrap:wrap">
      <button onclick="toggleMap('map1')" class="btn btn-outline-dark btn-sm" style="font-size:12px">🗺️ Show Map</button>
      <a href="https://maps.app.goo.gl/H7iL6aB37J9SU2JHA" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="font-size:12px">↗ Open Maps</a>
    </div>
    <div id="map1" style="display:none;margin-top:12px;border-radius:8px;overflow:hidden">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.4!2d77.2090!3d28.6448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s8145%2F2%20Arakashan%20Road%20Paharganj!5e0!3m2!1sen!2sin!4v1"
        width="100%" height="180" style="border:0;display:block" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  <!-- Godown Card -->
  <div style="background:var(--white);border:1px solid rgba(11,31,58,.1);border-radius:var(--radius-md);padding:20px;box-shadow:var(--shadow-sm)">
    <div style="display:flex;align-items:center;gap:8px;margin-bottom:10px">
      <span style="width:32px;height:32px;background:rgba(232,160,32,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:16px">🏭</span>
      <strong style="font-family:'Space Grotesk',sans-serif;font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:var(--accent)">Warehouse</strong>
    </div>
    <p style="font-size:13px;color:var(--grey);line-height:1.6;margin-bottom:14px">15/5 Gali No. 12px, Near Shree Ram Properties, Swaroop Nagar, Delhi – 110042</p>
    <div style="display:flex;gap:8px;flex-wrap:wrap">
      <button onclick="toggleMap('map2')" class="btn btn-outline-dark btn-sm" style="font-size:12px">🗺️ Show Map</button>
      <a href="https://maps.google.com/?q=15/5+Gali+No+12+Swaroop+Nagar+Delhi+110042" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="font-size:12px">↗ Open Maps</a>
    </div>
    <div id="map2" style="display:none;margin-top:12px;border-radius:8px;overflow:hidden">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.8!2d77.1660!3d28.6900!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sSwaroop+Nagar+Delhi!5e0!3m2!1sen!2sin!4v1"
        width="100%" height="180" style="border:0;display:block" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

</div>

<style>
@media (max-width:600px) {
  #contact-address-grid { grid-template-columns:1fr !important; }
}
</style>

<script>
function toggleMap(id) {
  var map = document.getElementById(id);
  var btn = map.previousElementSibling.querySelector('button');
  if (map.style.display === 'none') {
    map.style.display = 'block';
    btn.textContent = '🗺️ Hide Map';
  } else {
    map.style.display = 'none';
    btn.textContent = '🗺️ Show Map';
  }
}
</script>
      </div>

    </div>
  </div>
</section>