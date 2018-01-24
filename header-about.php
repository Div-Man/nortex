
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>О нас</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/vendor.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    
    <script src="<?php echo get_template_directory_uri();?>/scripts/vendor/modernizr.js"></script>
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="top-line">
        <div class="tl-number">
            <a href="#"><?php
							if ( is_active_sidebar( 'number') ) : ?>
								
								<?php dynamic_sidebar( 'number' ); ?>
								
						<?php endif; ?></a>
            <span>Поможем оформить заказ</span>
        </div>
        <div class="tl-social">
            <span>Мы в соц. сетях</span>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>
    <header class="pages-header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ph-title hvr-pop">
                       <a href="/">
                           магазин оригинальной<br>
                           одежды и сувениров
                       </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
                    <nav class="ph-nav">
					
					<?php 
						wp_nav_menu(['theme_location' => 'menu', 'container' => '']);
					?>

                    <nav class="ph-drop-nav white">
                      <div class="navbar-header">
                        <button type="button" class="hvr-pop navbar-toggle collapsed ph-drop-btn" data-toggle="collapse" data-target="#ph-drop-menu" aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span>
                          <span class="icon-bar top-bar"></span>
                          <span class="icon-bar middle-bar"></span>
                          <span class="icon-bar bottom-bar"></span>
                        </button>
                      </div>
                      <!-- nav btn -->
					
                      <div id="ph-drop-menu" class="navbar-collapse collapse ph-drop-menu">
                        <a class="scroller hvr-push" href="print.html">принты</a>
                        <a class="hvr-push" href="lookbook.html">галерея</a>
                        <a class="hvr-push" href="catalog.html">каталог</a>
                        <a class="hvr-push" href="blog.html">блог</a>
                        <a class="hvr-push" href="about.html">о нас</a>
                        <a class="hvr-push" href="contacts.html">контакты</a>
                      </div>
                      <!--/.nav-collapse -->
                  </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-2">
                    <div class="ph-basket" role="group">
                        <button type="button" class="basket dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Ваша<br>корзина
                        </button>
                        <div class="dropdown-menu basket-dropdown" aria-labelledby="btnGroupDrop1">
                         <div class="drop-down-items">
						 
						 <?php 
						
							$pattern = "/^tovar\d+$/";
							foreach ($_COOKIE as $key => $value) { 
								$result = preg_match($pattern, $key);
								if($result)
								{
									  echo '<div class="dropdown-item product-in-basket clearfix">';
									   echo get_the_post_thumbnail($value);
									   echo '<div class="dd-text">';
										   echo '<h4>'.get_post($value)->post_title.'</h4>';
										   echo get_post_meta($value, 'print', true);
									   echo '</div>';
								   echo '</div>';
									
								}
							}
						 ?>
						          
                         </div>
                          <div class="go-issue dropdown-item">
                              <a class="dropdown-item" href="/ordering">Перейти к оформлению</a>
                          </div>
                          <div class="continue dropdown-item">Или <a href="#">продолжить</a> смотреть товары
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </header>