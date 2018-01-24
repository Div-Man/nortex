<?php 
	/*
		Template Name: Блог
	*/
?>

<?php 
	get_template_part( 'header', 'about');
	
?>

<div class="blog-under-header-images under-header-images">
    </div>
    <!-- card product content -->

    <section class="blog-content page-content">
      <div class="pc-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="blog-title pages-title">блог компании</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="pc-body blog-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php 
			$args = array(
				'numberposts' => 1,
				'category' => 37,
				'post_status' => 'publish',
			); 

			$result = wp_get_recent_posts($args)[0];
			
			$postId = $result['ID'];
			$mark = get_the_category($postId)[0]; //массив, в котором есть метка на раздел
			
			/*
			echo '<pre>';
			print_r( $mark);
			echo '</pre>';
			*/
			/*
			
			echo '<pre>';
				print_r($result);
			echo '</pre>';
			*/
			
			
			
			$arr = [
					'post_count' => 1,
					'cat' => 37,
					
				];
				
			$recent = new WP_Query($arr);
			

			
			?>
			
			  <div class="big-blog-box clearfix wow fadeIn hvr-grow" data-wow-duration=".5s">
                <div class="big-blog-img">
                 <?php  echo get_the_post_thumbnail($postId);?>
                </div>
                <div class="big-blog-desc-wrap">
                  <div class="bbd-header">
                    <a class="blog-tag blog-label bbd-tag">
                      <?php echo $mark->name;?>
                    </a>
                    <a class="blog-date blog-label bbd-date">
						<?php 
							echo dateArticle($recent->posts[0]->post_date);
						?>
                    </a>
                    <a class="blog-like blog-label bbd-like lp-like" id="lk<?php echo $postId; ?>" data-like="<?php echo $postId; ?>"><?php $like = get_post_meta($postId, 'likes', true); if($like) { echo $like; } else { echo '0';} ?></a>
                    <a class="blog-comment blog-label bbd-comment"><?php echo $recent->posts[0]->comment_count;?></a>
                  </div>
                  <div class="bbd-body">
                    <a class="blog-title bbd-title">
                     <?php echo $recent->posts[0]->post_title;?>
                    </a>
                    <p class="blog-description bbd">
                     <?php echo wp_trim_words($recent->posts[0]->post_content, 50, '...');?>
                    </p>
                    <a href="<?php echo $recent->posts[0]->guid;?>" class="bbd-more blog-btn-more">Дальше интереснее</a>
                  </div>
				  

                </div>
				
				
              </div>
            
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <!-- background blog box -->
              <div class="bg-blog-box wow fadeIn hvr-grow" data-wow-duration="1s">
                <img class="bgb-img" src="https://pp.userapi.com/c836431/v836431134/43c3e/ZE9RCgLREg8.jpg" alt="Блог">
                <a href="#" class="blog-label blog-date bgb-date">
                  20 мин
                </a>
                <a href="#" class="bgb-title">
                  Покоряем мир вместе с вами
                </a>
                <a href="#" class="blog-tag blog-label bgb-tag">
                  Ваши истории
                </a>
                <a href="blog-page.html" class="blog-btn-more blog-label bgb-more">
                  Дальше интереснее
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="blog-avatar-box wow fadeIn hvr-grow" data-wow-duration="1.5s">
                <a href="#" class="bab-title blog-title">
                  XXVIII Всероссийский Олимпийский день
                </a>
                 <a class="blog-like blog-label bab-like">12</a>
                 <a class="blog-comment blog-label bab-comment">3</a>
                 <a class="blog-date blog-label bab-date">
                    Сегодня
                  </a>
                  <p class="blog-description bab-desc">
                    Стать немного спортивней очень просто!  Уже завтра на Центральном стадионе состоится XXVIII Всероссийский Олимпийский день 
                  </p>
                  <div class="bab-img">
                    <img src="https://pp.userapi.com/c836431/v836431134/44129/5qEljZfagPw.jpg" alt="Блог">
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="blog-medium-size clearfix wow fadeIn hvr-grow" data-wow-duration="2s">
                <div class="bmz-desc-wrap">
                  <a href="#" class="blog-tag blog-label bmz-tag">Жизнь компании</a>
                  <p class="bmz-desc">
                    Вчера в Кировском парке в День России  проходил ЭКО-фестиваль  и мы были его непосредственными участниками! 
                  </p>
                  <a href="blog-page.html" class="bmz-more blog-btn-more">
                    Дальше интереснее
                  </a>
                  <a href="#" class="blog-label blog-like bmz-like">12</a>
                  <a href="" class="blog-label blog-comment bmz-comment">3</a>
                </div>
                <div class="bmz-img">
                  <img src="https://pp.userapi.com/c639620/v639620134/2a185/xBHx0wO3Uqo.jpg" alt="Блог">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
		  
			   <?php 
					if(empty($_GET['start']) || $_GET['start'] == 1) {
						$offset = 1;
					}
					
					else {
						$offset = $_GET['start'];
					}

					
			   
					$arr = [
						'posts_per_page' => 2,
						'cat' => 37,
						'offset' => $offset,
						
					];
					
					$recent = new WP_Query($arr);?>
					
					
			<?php $i = 0;?>	
					
			<?php while($recent->have_posts()) : $recent->the_post();?>
			
			
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			
              <div class="default-blog-box wow fadeIn hvr-grow">
			  
				
				<?php the_post_thumbnail([263, 177]);?>
				

                <div class="dbb-desc-wrap">
                  <a href="<?php echo $recent->posts[$i]->guid;?>" class="dbb-title blog-title"><?php the_title();?></a>
                  <a href="#" class="blog-label blog-tag dbb-tag">
                    Жизнь компании
                  </a>
				  
				   
                  <a class="blog-like blog-label dbb-like lp-like" id="lk<?php echo $recent->posts[$i]->ID; ?>" data-like="<?php echo $recent->posts[$i]->ID; ?>"><?php $like = get_post_meta($recent->posts[$i]->ID, 'likes', true); if($like) { echo $like; } else { echo '0';} ?></a>
                  
				  <a href="#" class="blog-label blog-comment dbb-comment">
                   <?php echo $recent->posts[$i]->comment_count;?>
                  </a>
                  <p class="dbb-desc blog-desc">
                  <?php echo wp_trim_words($recent->posts[$i]->post_content, 20, '...');?>
                  </p>
                  <a href="<?php echo $recent->posts[$i]->guid;?>" class="dbb-more">
                    Читать дальше
                  </a>
                  <a href="#" class="blog-date blog-label dbb-date">
                   <?php 
						echo dateArticle($recent->posts[$i]->post_date);
					?>
                  </a>
                </div>
				
              </div>
            </div>
			<?php $i++;?>
           <?php endwhile; ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pagination-wrap">
                    <ul class="pagination">
					
					
					<?php 	
						

								$separ = explode('/', $_SERVER['REQUEST_URI'])[2];
									$separ2 = explode('=', $separ);
									$page = $separ2[1];
									
									
									if($separ2[0] == '?pagen') {
										$page = preg_replace('/(\d+).*/', '$1', $separ2[1]);
									}
									else {
										$page = 1;
									}
								
								 if(!empty($_GET['cat'])) {
									$id = (int)$_GET['cat'];
								 }
								 else {
									$id=8; // ID заданной рубрики
								 }
								
								$total = get_category($id)->category_count;
								
								//цифра 3 это количество следующих страниц
								
								if(!empty($page)){

									if(($page + 3) <= $total) {
										$countPag = $page + 3;
									}
									else {
										$countPag = $total;
									}
									//echo $page;
									
									
									
									
									if($page > 1) { //это для предыдущих страниц (можно удалить полностью условие, тогда их не будет)
										
									
										
										
										
										$prevPage = $page - 1;
										$arr = [];
										for($j = $prevPage; $j >= 1; $j--) {
											$arr[] = $j;
										}
										$newArr = $arr;
										$output = array_slice($newArr, -3, 3); 
										
										$start = $_GET['start'] - 2;
										
										$links = [
										];
										
										foreach($output as $key => $val) {
											array_push($links,  '<li><a href=?pagen='.$val.'&start='.$start.'>'. $val .'</a></li>');
											$start = $start - 2;
										}
										
										$links = array_reverse($links);
										
										foreach($links as $link) {
											echo $link;
										}

									}
									
								
									if(empty($_GET['start'])) {
										$start = 3;
									}
									else {
										$start = $_GET['start'] + 2;
									}
									
									
									
									for($i = $page; $i <= $countPag; $i++) {
									
										if($page == $i) {
												echo '<li><a href="#" class="pagination-active">' . $i .'</a></li>';
										}
										else {
											
											echo '<li><a href=?pagen='.$i.'&start='.$start.'>'. $i .'</a></li>';
											$start = $start + 2;
										}
										
										
									}
										
									$next = $page + 1;
										

									
								}
									
								else {
									for($i = 1; $i <= 3; $i++) {
										if($i == 1) {
											echo '<li><a href="#" class="pagination-active">' . $i .'</a></li>';
										}
										else {
											echo '<li><a href="?pagen='.$i.'">'. $i .'</a></li>';
										}
									}

								}


								?>
                    </ul>
                </div>
            </div>
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