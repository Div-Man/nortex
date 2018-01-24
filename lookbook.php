<?php 
	/*
		Template Name: Лукбук
	*/
?>

<?php 
	get_template_part( 'header', 'about');
	
?>

<section class="lookbook-content page-content">
      <div class="pc-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="lookbook-title pages-title">лукбук</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="lookbook-items">
        <div class="container">
          <div class="row">
		  
		  
		  
		  <?php 
			$arr = [
					'posts_per_page' => 20,
					'cat' => 39,
					
				];
				
			$recent = new WP_Query($arr);
		
		  ?>
		  
		  
		  <?php 
			$i = 0;
			while($recent->have_posts()) : $recent->the_post();?>
			
			<?php 
				$postId = $recent->post->ID;
			
				if($i == 0) {
					echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
					echo '<div class="lb-big-box l-box wow fadeIn">';
				}
				
				elseif($i == 1) {
					echo '<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">';
					echo '<div class="lb-medium-box l-box wow fadeIn">';
				}
				
				elseif($i == 2) {
					echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
					echo '<div class="lb-small-box l-box wow fadeIn">';
				}
				
				else {
					echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
					echo '<div class="lb-normal-box nm-left l-box wow fadeIn">';
				}
				
			?>
			   <?php  echo get_the_post_thumbnail($postId);?>

                <!-- lookbook description wrapper -->
                <div class="lb-desc-wrap gallery-wrapper">
                  <h1><?php echo $recent->post->post_title;?></h1>
                  <span><?php echo $recent->post->post_content;?></span>
                  <div class="gallery-container" style="display: none">
                    <a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook1', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook1', true)?>">
                    </a>
					<a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook2', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook2', true)?>">
                    </a>
					<a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook3', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook3', true)?>">
                    </a>
					<a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook4', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook4', true)?>">
                    </a>
					<a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook5', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook5', true)?>">
                    </a>
					<a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook6', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook6', true)?>">
                    </a>
					<a href="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook7', true)?>">
                      <img src="<?php echo bloginfo('template_url') . get_post_meta($postId, 'lookbook7', true)?>">
                    </a>
                  </div>
                  <a href="#" class="hvr-grow open-gallery">Смотреть коллекцию</a>
                </div>
			
			<?php 
		  
				echo '</div>';
				echo '</div>';
				$i++; 
				endwhile; 
			?>
		  
          </div>
        </div>
      </div>
    </section>
    <section class="instagram-container">
      <div class="inst-block left">
        <div class="tlb">
          <div class="small-links">
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c837439/v837439134/3b04d/BRBFF30gWcY.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c837432/v837432134/3f5f0/6wmeF1o9Lm4.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
          </div>
          <div class="ins-item big-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c837432/v837432134/3f5dc/FJdizvNwX08.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
        </div>
        <div class="blb">
          <div class="ins-item big-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c837432/v837432134/3f5d2/JzVqyMsSTjY.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="small-links">
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c837432/v837432134/3f5c8/gRj3WTpeZBE.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c837432/v837432134/3f5a5/RiRr971goTk.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="inst-block middle">
        <div class="tmb">
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c639625/v639625134/20fcc/QIsyD5fqCVg.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c639625/v639625134/20fd6/NfR1T3UoZHU.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c639625/v639625134/20c9b/OC1WS_anDWc.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c837439/v837439134/3b16f/y-Bn4YP2ups.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
        </div>
        <div class="mb">
          <img src="images/icon/instagram.svg" alt="Иконка инстаграма">
          <h3>@gorodnasysole</h3>
          <p>
            Подписывайтесь<br>
            Делайте репосты и попадайте<br>
            в нашу ленту
          </p>
        </div>
        <div class="bmb">
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c837439/v837439134/3b147/u0Qt2xh30sM.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c837439/v837439134/3b129/p76FdqiP09I.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="ins-item small-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c837439/v837439134/3b115/a3Kv1KEUrns.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="ins-item small-link">
            <a href="" class="inst-link hvr-grow">
              <img src="https://pp.userapi.com/c837439/v837439134/3b18d/cQ3exfhna5A.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
        </div>
      </div>
      <div class="inst-block right">
        <div class="trb">
          <div class="ins-item big-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c639625/v639625134/20cb9/LrpYwSQbPOs.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
          <div class="small-links">
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c639625/v639625134/20cff/qqsyc-KzG9Q.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c639625/v639625134/20d09/G2YcyTFx47s.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
          </div>
        </div>
        <div class="brb">
          <div class="small-links">
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c639625/v639625134/20d60/RT0aVLn69LE.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
            <div class="ins-item small-link hvr-grow">
              <a href="" class="inst-link">
                <img src="https://pp.userapi.com/c639625/v639625134/20d88/c4h03wWaVNM.jpg" alt="Инстраграмм Город на Сысоле">
              </a>
            </div>
          </div>
          <div class="ins-item big-link hvr-grow">
            <a href="" class="inst-link">
              <img src="https://pp.userapi.com/c639625/v639625134/20db0/VaARl6Ao-es.jpg" alt="Инстраграмм Город на Сысоле">
            </a>
          </div>
        </div>
      </div>
      <a href="http://vk.com/sysole" class="vk-bottom-link hvr-grow">
      </a>
    </section>
	
	  <?php get_footer();?>