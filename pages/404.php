<?php $page_title = 'Page Not Found'; $base = APM_CONFIG['base_url'];
http_response_code(404); ?>

<section style="min-height:80vh;display:flex;align-items:center;justify-content:center;background:var(--grad2);text-align:center;padding:80px 24px">
  <div>
    <div style="font-family:var(--font-head);font-size:clamp(80px,15vw,160px);color:rgba(46,127,193,.18);line-height:1">404</div>
    <h1 style="font-family:var(--font-head);font-size:clamp(32px,5vw,56px);color:var(--white);letter-spacing:2px;margin-top:-20px">Page <span style="color:var(--sky)">Not Found</span></h1>
    <p style="font-size:16px;color:var(--silver);margin:18px auto 36px;max-width:480px;line-height:1.7">The page you are looking for does not exist or has been moved. Please check the URL or return to the homepage.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <a href="<?php echo $base; ?>/" class="btn btn-primary btn-lg">🏠 Go to Homepage</a>
      <a href="<?php echo $base; ?>/contact" class="btn btn-outline btn-lg">📞 Contact Us</a>
    </div>
  </div>
</section>
