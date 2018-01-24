<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Город на Сысоле</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <?php wp_head();?>
    
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  
    <header class="header" id="header">
        <!-- Header left box -->
        <div class="hl-box clearfix">
            <div class="hl-logo wow fadeIn">
                <a href="index.html">
                    <img src="<?php bloginfo('template_url');?>/images/logo-gns.png" alt="Город на Сысоле">
                </a>
            </div>
            <div class="hl-title wow fadeIn">
                <h1>магазин<br>оригинальной<br>одежды и сувениров</h1>
            </div>
            <div class="hl-desc wow fadeIn">
                <p>Товары с эксклюзивными принтами,<br>
                    пропитанные духом природы<br>
                    и жизнью Республики Коми</p>
            </div>
            <div class="hl-numb wow fadeIn">
                <a href="#" type="tel:7904222458"><?php
							if ( is_active_sidebar( 'number') ) : ?>
							
								<?php dynamic_sidebar( 'number' ); ?>
								
						<?php endif; ?></a>
                <span>Поможем оформить заказ</span>
            </div>
        </div>
        <!-- Header right box -->
        <div class="hr-box wow fadeIn">
            <div class="h-nav">
			
			<?php 
				wp_nav_menu(['theme_location' => 'menu', 'menu_class' => 'top-menu', 'container' => 'false']);
			?>
              <!-- dropdown меню -->
             
            </div>
            <div class="basket" role="group">
			
			
			
			
			
                <button type="button" class="main-basket dropdown-toggle hvr-grow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ваша<br>корзина
                </button>
                <div class="dropdown-menu main-basket-dropdown" aria-labelledby="btnGroupDrop1">
				
				<?php 
						
							$pattern = "/^tovar\d+$/";
							foreach ($_COOKIE as $key => $value) { 
								$result = preg_match($pattern, $key);
								if($result)
								{
									  echo '<div class="dropdown-item product-in-basket clearfix">';
									   echo get_the_post_thumbnail($value, [50, 50]);
									   echo '<div class="dd-text">';
										   echo '<h4>'.get_post($value)->post_title.'</h4>';
										   echo get_post_meta($value, 'print', true);
									   echo '</div>';
								   echo '</div>';
									
								}
							}
						 ?>
				
				  
				  
                  <div class="go-issue dropdown-item">
                     <a class="dropdown-item" href="/ordering">Перейти к оформлению</a>
                  </div>
                  <div class="continue dropdown-item">Или <a href="#">продолжить</a> смотреть товары
                  </div>
                </div>
              </div>
			  
			  
			  
			  
            <div class="header-social">
              <a href="https://vk.com/sysole" id="header-social-vk">
                <img src="<?php bloginfo('template_url');?>/images/icon/vk-social-logotype.svg" class="hvr-grow" alt="">
              </a>
              <a href="https://www.instagram.com/gorod_na_sysole/" id="header-social-inst">
                <img src="<?php bloginfo('template_url');?>/images/icon/instagram-logo.svg" class="hvr-grow" alt="">
              </a>
            </div>
            <div class="h-slider">
			
			<?php 
			
				$arr = [
					'posts_per_page' => 15,
					'cat' => 36,
				];
			
				$slider = new WP_Query($arr);
				
				/*
				echo '<pre>';
					print_r($slider->post);
				echo '</pre>';
				*/
				
				$i = 0;
				
				while($slider->have_posts()) : $slider->the_post();?>
				
				
				
				<div class="sl-slide"
                     style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
                    <div class="sl-text">
					<?php 
						
					?>
                        <h1 class="sl-title"><?php echo (get_post_meta($post->ID, 'printname1', true)); ?><span><?php echo (get_post_meta($post->ID, 'printname2', true)); ?></span></h1>
                        <p class="sl-desc">
							 <?php echo get_post_meta($post->ID, 'descriptionSlide', true);?>
						</p>

                        <a href="<?php echo (get_post_meta($post->ID, 'printlink', true)); ?>" class="sl-btn hvr-grow">Все товары с принтом</a>
                    </div>
                </div>
				
				<?php 
					$i++;
					endwhile; 
				?>
				
            </div>
			
			
			 <div class="header-thumbs" dir="rtl">
                <div class="h-slider-thumbs">
			
			<?php 
			
				$slider = new WP_Query($arr);
				
				while($slider->have_posts()) : $slider->the_post();?>
				
					<div class="sl-slide hvr-grow">
						<?php the_post_thumbnail([145, 110]);?>
					</div>
				
				<?php endwhile; ?>
				
				</div>
				</div>
			
			
        </div>
    </header>