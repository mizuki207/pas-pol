<footer class="l-footer">
<div class="l-footer-nav">
  <div class="l-container l-container--full">
    <nav class="m-navigation m-navigation--center">
      <ul class="m-navigation--item">
        <li class="m-navigation--list">
        <a class="m-navigation--link" href="<?php echo home_url(); ?>">TOP</a>
        </li>
        <li class="m-navigation--list">
        <a class="m-navigation--link" href="<?php echo esc_url(home_url('/archive-products.php')); ?>">PRODUCT</a>
        </li>
        <li class="m-navigation--list">
        <a class="m-navigation--link" href="<?php echo esc_url(home_url('')); ?>">ABOUT</a>
        </li>
        <li class="m-navigation--list">
        <a class="m-navigation--link" href="<?php echo esc_url(home_url('/archive-news.php')); ?>">NEWS</a>
        </li>
        <li class="m-navigation--list">
        <a class="m-navigation--link"href="<?php echo esc_url(home_url('')); ?>">CONTACT</a>
        </li>      
      </ul>
    </nav>
  </div>
</div>

  <div class="l-container l-container--narrow">
    <div class="l-footer-inner">
      <h1 class="m-site-logo m-site-logo--small">
          <a href="<?php echo home_url(); ?>">
            <img class="m-site-logo__img" src="<?php echo esc_url (get_template_directory_uri() . '/assets/images/siteLogo-small@2x.webp' ); ?>" alt="PAS-POL -旅のモノづくりブランド-｜TABIPPO">
          </a>
        </h1>
        <div class="m-copy-right">
          <small class="m-copy-small">Copyright © 2024 PAS-POL -旅のモノづくりブランド-｜TABIPPO All rights reserved.</small>
        </div>
    </div>
  </div>
</footer>

<link rel="stylesheet" id="metaslider-flex-slider-css" href="https://pas-pol.jp/wp-content/plugins/ml-slider/assets/sliders/flexslider/flexslider.css?ver=3.1.1" type="text/css" media="all">
<link rel="stylesheet" id="metaslider-public-css" href="https://pas-pol.jp/wp-content/plugins/ml-slider/assets/metaslider/public.css?ver=3.1.1" type="text/css" media="all">
<script type="text/javascript" src="https://pas-pol.jp/wp-includes/js/wp-embed.min.js?ver=4.9.6"></script>
<script type="text/javascript" src="https://pas-pol.jp/wp-content/plugins/ml-slider/assets/sliders/flexslider/jquery.flexslider-min.js?ver=3.1.1"></script>

<?php wp_footer(); ?>
</body>
</html>