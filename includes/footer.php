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
  <div class="whatsapp-pulse" aria-hidden="true"></div>
  <svg viewBox="0 0 448 512" width="28" height="28" fill="#fff" aria-hidden="true"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
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