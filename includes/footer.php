<?php
$phone    = APM_CONFIG['phone'];
$email    = APM_CONFIG['email'];
$address  = APM_CONFIG['address'];
$whatsapp = APM_CONFIG['whatsapp'];
$base     = APM_BASE_URL;
?>

<footer id="site-footer">
  <div class="container">
    <div class="footer-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:40px">

      <div class="footer-about">
        <a href="<?php echo $base; ?>/" class="site-logo" style="display:flex;align-items:center;gap:10px;text-decoration:none;margin-bottom:16px">
          <img src="<?php echo apm_asset('images/logo.jpg'); ?>" alt="APM Chemical" style="height:46px;width:auto;">
          <div class="logo-text">
            <strong style="color:var(--white);display:block">Aggarwal Publicity Marketing</strong>
            <small style="color:var(--silver)">Chemical Manufacturers Since 1994</small>
          </div>
        </a>
        <p class="footer-about-text" style="color:var(--silver);font-size:13px;line-height:1.7">A premier trader in high-purity specialty chemicals — Paraformaldehyde, Spray Chemicals, Melamine, and Phthalic Acid. Serving industries across India.</p>
        <div class="footer-socials" style="display:flex;gap:10px;margin-top:16px">
          <a href="#" class="social-link" aria-label="LinkedIn">🔗</a>
          <a href="#" class="social-link" aria-label="Facebook">📘</a>
          <a href="#" class="social-link" aria-label="YouTube">▶️</a>
          <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="social-link" aria-label="Email">📧</a>
        </div>
      </div>

      <div>
        <div class="footer-col-title">Quick Links</div>
        <ul class="footer-links" style="list-style:none;padding:0;margin:0">
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
        <ul class="footer-links" style="list-style:none;padding:0;margin:0">
          <li><a href="<?php echo $base; ?>/products/paraformaldehyde91">Paraformaldehyde 91%</a></li>
          <li><a href="<?php echo $base; ?>/products/paraformaldehyde96">Paraformaldehyde 96%</a></li>
          <li><a href="<?php echo $base; ?>/products/spray-chemicals">Spray Chemicals</a></li>
          <li><a href="<?php echo $base; ?>/products/melamine">Melamine</a></li>
          <li><a href="<?php echo $base; ?>/products/phthalic-acid">Phthalic Acid</a></li>
        </ul>
      </div>

      <div>
        <div class="footer-col-title">Get In Touch</div>
        <div class="footer-contact-row"><span class="icon">📍</span><div><strong style="color:var(--silver);font-size:11px;letter-spacing:1px;text-transform:uppercase;font-family:'Space Grotesk',sans-serif">Head Office</strong><br><span><?php echo htmlspecialchars($address); ?></span></div></div>
<div class="footer-contact-row" style="margin-top:8px"><span class="icon">📍</span><div><strong style="color:var(--silver);font-size:11px;letter-spacing:1px;text-transform:uppercase;font-family:'Space Grotesk',sans-serif">Warehouse</strong><br><span>15/5 Gali No. 12, Near Shree Ram Properties, Swaroop Nagar, Delhi – 110042</span></div></div>
        <div class="footer-contact-row"><span class="icon">📞</span><span><a href="tel:<?php echo preg_replace('/\s+/','',$phone); ?>"><?php echo htmlspecialchars($phone); ?></a></span></div>
        <div class="footer-contact-row"><span class="icon">📧</span><span><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></span></div>
        <div class="footer-contact-row"><span class="icon">⏰</span><span>Mon–Sat: 9:00 AM – 6:00 PM<br>Sunday: Closed</span></div>
        <div style="margin-top:16px">
          <a href="https://maps.app.goo.gl/H7iL6aB37J9SU2JHA" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:6px;font-size:12px;color:var(--sky);text-decoration:none">📍 Office Address</a>
          <a href="https://maps.app.goo.gl/H7iL6aB37J9SU2JHA" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:6px;font-size:12px;color:var(--sky);text-decoration:none">📍 Warehouse Address</a>
        </div>
      </div>
    
    </div>

    <div class="footer-bottom" style="margin-top:40px;padding-top:24px;border-top:1px solid rgba(255,255,255,.08);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
      <p style="margin:0;font-size:13px;color:var(--silver)">&copy; <?php echo date('Y'); ?> Aggarwal Publicity Marketing Pvt. Ltd. All rights reserved.</p>
      <p style="margin:0;font-size:13px;color:var(--silver)">&copy; Developed by Aggarwal Software Solutions  </p>
      <p style="margin:0;font-size:13px;color:var(--silver)"><a href="<?php echo $base; ?>/contact" style="color:var(--silver)">Privacy Policy</a> &middot; <a href="<?php echo $base; ?>/contact" style="color:var(--silver)">Terms of Use</a></p>
    </div>
  </div>
</footer>

<a href="https://wa.me/<?php echo htmlspecialchars($whatsapp); ?>" class="whatsapp-btn" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
  <div class="whatsapp-pulse" aria-hidden="true"></div>💬
</a>

<div class="lightbox-backdrop" id="apm-lightbox" role="dialog" aria-modal="true" aria-label="Image preview" style="display:none;position:fixed;inset:0;z-index:99999;background:rgba(0,0,0,.92);align-items:center;justify-content:center">
  <button class="lightbox-nav-btn lightbox-prev" id="lb-prev" onclick="prevLightboxImage()" aria-label="Previous image">‹</button>
  <div class="lightbox-box">
    <div class="lightbox-visual" id="lb-emoji" style="background:#000;display:flex;align-items:center;justify-content:center">
      <img id="lb-img" src="" alt="" style="max-width:100%;max-height:400px;object-fit:contain;display:block">
    </div>
    <div class="lightbox-caption" id="lb-caption">Caption</div>
    <div class="lightbox-counter" id="lb-counter"></div>
  </div>
  <button class="lightbox-nav-btn lightbox-next" id="lb-next" onclick="nextLightboxImage()" aria-label="Next image">›</button>
  <button class="lightbox-close-btn" id="lb-close-btn" onclick="closeLightbox()" aria-label="Close lightbox">✕</button>
</div>

<style>
@media (max-width: 900px) {
  #site-footer .footer-grid { grid-template-columns: 1fr 1fr !important; gap: 32px !important; }
}
@media (max-width: 600px) {
  #site-footer .footer-grid { grid-template-columns: 1fr !important; gap: 28px !important; }
  #site-footer .footer-bottom { flex-direction: column !important; text-align: center !important; }
}
</style>

<script src="<?php echo apm_asset('js/main.js'); ?>?v=<?php echo APM_VERSION; ?>"></script>
</body>
</html>