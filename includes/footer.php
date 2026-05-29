<?php
$phone    = APM_CONFIG['phone'];
$email    = APM_CONFIG['email'];
$address  = APM_CONFIG['address'];
$whatsapp = APM_CONFIG['whatsapp'];
$base     = APM_CONFIG['base_url'];
?>

<footer id="site-footer">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-about">
        <a href="<?php echo $base; ?>/" class="site-logo">
                  <img src="<?php echo apm_asset('images/logo.jpg'); ?>" alt="APM Chemical" style="height:46px;width:auto;">

          <div class="logo-text">
            
            <strong style="color:var(--white)">Aggarwal Publicity Marketing</strong>
            <small>Chemical Manufacturers Since 2001</small>
          </div>
        </a>
        <p class="footer-about-text">A premier manufacturer of high-purity specialty chemicals — Paraformaldehyde, Spray Chemicals, Melamine, and Phthalic Acid. Serving industries across India with quality, reliability, and technical expertise.</p>
        <div class="footer-socials">
          <a href="#" class="social-link" aria-label="LinkedIn">🔗</a>
          <a href="#" class="social-link" aria-label="Facebook">📘</a>
          <a href="#" class="social-link" aria-label="YouTube">▶️</a>
          <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="social-link" aria-label="Email">📧</a>
        </div>
      </div>

      <div>
        <div class="footer-col-title">Quick Links</div>
        <ul class="footer-links">
          <li><a href="<?php echo $base; ?>/">Home</a></li>
          <li><a href="<?php echo $base; ?>/about">About Us</a></li>
          <li><a href="<?php echo $base; ?>/products">Products</a></li>
          <li><a href="<?php echo $base; ?>/gallery">Gallery</a></li>
          <li><a href="<?php echo $base; ?>/quality-certifications">Quality &amp; Certifications</a></li>
          <li><a href="<?php echo $base; ?>/news">News &amp; Blog</a></li>
          <li><a href="<?php echo $base; ?>/contact">Contact Us</a></li>
        </ul>
      </div>

      <div>
        <div class="footer-col-title">Our Products</div>
        <ul class="footer-links">
          <li><a href="<?php echo $base; ?>/products/paraformaldehyde91">Paraformaldehyde 91%</a></li>
          <li><a href="<?php echo $base; ?>/products/paraformaldehyde96">Paraformaldehyde 96%</a></li>
          <li><a href="<?php echo $base; ?>/products/spray-chemicals">Spray Chemicals</a></li>
          <li><a href="<?php echo $base; ?>/products/melamine">Melamine</a></li>
          <li><a href="<?php echo $base; ?>/products/phthalic-acid">Phthalic Acid</a></li>
        </ul>
      </div>

      <div>
        <div class="footer-col-title">Get In Touch</div>
        <div class="footer-contact-row"><span class="icon">📍</span><span><?php echo htmlspecialchars($address); ?></span></div>
        <div class="footer-contact-row"><span class="icon">📞</span><span><a href="tel:<?php echo preg_replace('/\s+/','',$phone); ?>"><?php echo htmlspecialchars($phone); ?></a></span></div>
        <div class="footer-contact-row"><span class="icon">📧</span><span><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></span></div>
        <div class="footer-contact-row"><span class="icon">⏰</span><span>Mon–Sat: 9:00 AM – 6:00 PM<br>Sunday: Closed</span></div>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Aggarwal Publicity Marketing Pvt. Ltd. All rights reserved.</p>
      <p><a href="<?php echo $base; ?>/contact">Privacy Policy</a> &middot; <a href="<?php echo $base; ?>/contact">Terms of Use</a></p>
    </div>
  </div>
</footer>

<a href="https://wa.me/<?php echo htmlspecialchars($whatsapp); ?>" class="whatsapp-btn" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
  <div class="whatsapp-pulse" aria-hidden="true"></div>💬
</a>

<div class="lightbox-backdrop" id="apm-lightbox" role="dialog" aria-modal="true" aria-label="Image preview" style="display:none;position:fixed;inset:0;z-index:99999;background:rgba(0,0,0,.92);align-items:center;justify-content:center">
  <div class="lightbox-box">
    <div class="lightbox-visual" id="lb-emoji" style="background:#000;display:flex;align-items:center;justify-content:center">
      <img id="lb-img" src="" alt="" style="max-width:100%;max-height:400px;object-fit:contain;display:block">
    </div>
    <div class="lightbox-caption" id="lb-caption">Caption</div>
  </div>
  <button class="lightbox-close-btn" onclick="closeLightbox()" aria-label="Close lightbox">✕</button>
</div>

<script src="<?php echo apm_asset('js/main.js'); ?>?v=<?php echo APM_VERSION; ?>"></script>
</body>
</html>
