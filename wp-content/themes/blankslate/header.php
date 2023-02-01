<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <header>
      <!-- Start block header -->
      <div class="container head-menu">
        <div class="navigation" id="navigation-block">
          <div class="logo">
            <div class="burger">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/burger.svg')?>" alt="open-menu" id="open-menu" />
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/close.svg')?>" alt="close-menu" id="close-menu" />
            </div>
            <a href="/">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Logo.png')?>" alt="Logo" />
            </a>
          </div>
          <nav class="menu">
            <ul>
              <li>
                <a href="#">Nous découvrir</a>
              </li>
              <li>
                <a href="#">Nos activités</a>
              </li>
              <li>
                <a href="#">Nos actualités</a>
              </li>
              <li>
                <a href="#">Nos adresses</a>
              </li>
              <li>
                <a href="#">Postuler</a>
              </li>
              <li class="phone">
                <a href="tel:+380596763818">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/phone.svg')?>" alt="phone" />
                  <span>0596 76 38 18</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- End block header -->
    </header>
<main id="content" role="main">