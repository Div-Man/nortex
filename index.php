<?php get_header();?>
    <section class="lookbook">
      <div class="container">
        <div class="row">
		
		
		 <?php 
			
			$arr = [
					'posts_per_page' => 5,
					'cat' => 39,
					
				];
				
			$recent = new WP_Query($arr);		
			
		  ?>
		
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn">
            <div class="lb-box wow fadeIn" data-wow-duration="2s" id="lb-tb">
              <h1>Лукбук</h1>
              <p>Когда твоя Родина<br>
              всегда с тобой, даже<br>
              в тысячах километров<br>
              от дома</p>
            </div>
            <div class="lb-box wow fadeIn" id="lbbox-2">
              <div class="lb-box-title">
                <a href="lookbook"><?php echo $recent->posts[0]->post_title?></a>
              </div>
			  <?php  echo get_the_post_thumbnail($recent->posts[0]->ID);?>
            </div>
            <div class="lb-box wow fadeIn" id="lbbox-3">
              <div class="lb-box-title">
                 <a href="lookbook"><?php echo $recent->posts[1]->post_title?></a>
              </div>
              <?php  echo get_the_post_thumbnail($recent->posts[1]->ID);?>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="lb-box wow fadeIn" id="lbbox-4">
              <div class="lb-box-title">
                 <a href="lookbook"><?php echo $recent->posts[2]->post_title?></a>
              </div>
               <?php  echo get_the_post_thumbnail($recent->posts[2]->ID);?>
            </div>
            <div class="lb-box wow fadeIn" id="lbbox-5">
              <a id="watch-gallery" href="lookbook">Смотреть <br>галерею</a>
              <img src="https://pp.userapi.com/c639625/v639625134/20ca5/cHQi6Y0VVNU.jpg">
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-6">
            <div class="lb-box wow fadeIn" id="lbbox-6">
              <div class="lb-box-title">
                 <a href="lookbook"><?php echo $recent->posts[3]->post_title?></a>
              </div>
              <?php  echo get_the_post_thumbnail($recent->posts[3]->ID);?>
            </div>
            <div class="lb-box wow fadeIn" id="lbbox-7">
              <div class="lb-box-title">
                 <a href="lookbook"><?php echo $recent->posts[4]->post_title?></a>
              </div>
             <?php  echo get_the_post_thumbnail($recent->posts[4]->ID);?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="what-we-have">
      <img src="<?php bloginfo('template_url');?>/images/flower.png" class="flower wow fadeIn hvr-grow" alt="Что у нас есть?">
      <div class="container">
        <div class="row">
          <div class="wwh-header wow fadeIn">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="wow fadeIn">Что у нас есть</h1>
                  <p class="wow fadeIn">Любимые образы, которые напоминают о доме в одежде<br>
                  и сувенирах сделанные своими руками из лучших<br>
                  материалов</p>
                </div>
              </div>
            </div>
          </div>
          <div class="wwh-body">
            <div class="container">
              <div class="row">
			  
			   <?php 
			
				$parent_id = 40; // одежда

					# получаем дочерние рубрики
					$sub_cats = get_categories( array(
						'child_of' => $parent_id,
						'hide_empty' => 0
					) );	
					
					///////////////////////////////
					
					
					$parent_id = 41; // аксессуары

					# получаем дочерние рубрики
					$sub_cats2 = get_categories( array(
						'child_of' => $parent_id,
						'hide_empty' => 0
					) );	
				
			  ?>
				  
			  
			  
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="wwh-clothes">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div id="cb-title">
                          <div class="cb-title-img">
                            <img src="<?php bloginfo('template_url');?>/images/icon/clothes-icon.png" alt="Одежда">
                          </div>
                          <a href="#" class="hvr-grow">Одежда</a>
                        </div>
                        <div class="clothes-box" id="clothes-box2">
                          <a href="catalog/?cat=<?php echo $sub_cats[0]->term_id;?>"><?php echo $sub_cats[0]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats[0]->description;?>" alt="Одежда">
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="clothes-box" id="clothes-box3">
                         <a href="catalog/?cat=<?php echo $sub_cats[1]->term_id;?>"><?php echo $sub_cats[1]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats[1]->description;?>" alt="Одежда">
                        </div>
                        <div class="clothes-box" id="clothes-box4">
                          <a href="catalog/?cat=<?php echo $sub_cats[2]->term_id;?>"><?php echo $sub_cats[2]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats[2]->description;?>" alt="Одежда">
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="clothes-box" id="clothes-box5">
                          <a href="catalog/?cat=<?php echo $sub_cats[3]->term_id;?>"><?php echo $sub_cats[3]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats[3]->description;?>" alt="Одежда">
                        </div>
                        <div class="clothes-box" id="clothes-box6">
                          <a href="catalog/?cat=<?php echo $sub_cats[4]->term_id;?>"><?php echo $sub_cats[4]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats[4]->description;?>" alt="Одежда">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="wwh-accessory wow fadeIn">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="accessory-box" id="accessory-box1">
                         <a href="catalog/?cat=<?php echo $sub_cats2[0]->term_id;?>"><?php echo $sub_cats2[0]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[0]->description;?>" alt="">
                        </div>
                        <div class="accessory-box" id="accessory-box2">
                          <a href="catalog/?cat=<?php echo $sub_cats2[1]->term_id;?>"><?php echo $sub_cats2[1]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[1]->description;?>" alt="">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="accessory-box" id="accessory-box3">
                          <a href="catalog/?cat=<?php echo $sub_cats2[2]->term_id;?>"><?php echo $sub_cats2[2]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[2]->description;?>" alt="">
                        </div>
                        <div id="accessory-title">
                          <div class="accessory-title-img">
                            <img src="<?php bloginfo('template_url');?>/images/icon/accessories-icon.png" alt="">
                          </div>
                          <a href="catalog.html" class="hvr-grow">Аксессуары</a>
                        </div>
                        <div class="accessory-box" id="accessory-box4">
                          <a href="catalog/?cat=<?php echo $sub_cats2[3]->term_id;?>"><?php echo $sub_cats2[3]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[3]->description;?>" alt="">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="accessory-box" id="accessory-box5">
                          <a href="catalog/?cat=<?php echo $sub_cats2[4]->term_id;?>"><?php echo $sub_cats2[4]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[4]->description;?>" alt="">
                        </div>
                        <div class="accessory-box" id="accessory-box6">
                           <a href="catalog/?cat=<?php echo $sub_cats2[5]->term_id;?>"><?php echo $sub_cats2[5]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[5]->description;?>" alt="">
                        </div>
                        <div class="accessory-box" id="accessory-box7">
                           <a href="catalog/?cat=<?php echo $sub_cats2[6]->term_id;?>"><?php echo $sub_cats2[6]->name;?></a>
                          <img src="<?php bloginfo('template_url');?><?php echo $sub_cats2[6]->description;?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-blog">
      <div class="container">
        <div class="header-blog wow fadeIn">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
              <h1 class="blog-title">
                Наш блог
              </h1>
              <p class="blog-description">
                Безумно трогательные и интересные истории наших<br>
                покупателей и немножко о жизни компании
              </p>
            </div>
            <div class="col-lg-offset-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="subscribe">
                <a href="http://vk.com/sysole" class="hvr-grow"></a>
                <span>Подпишитесь на нашу группу Вконтакте<br>
                Чтобы не пропускать скидки, новости<br>
                и самое интересное</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
		
		
		<?php 
		
				$arr = [
						'posts_per_page' => 4,
						'cat' => 37,
						
					];
					
					$recent = new WP_Query($arr);
					
					$i = 0;
					
				?>
		
			<?php while($recent->have_posts()) : $recent->the_post();?>
			
				<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
				<div class="default-blog-box hvr-grow">
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
		   
		   
          
        </div>
      </div>
      <img src="<?php bloginfo('template_url');?>/images/icon/side-back-left.png" class="side-back-left hvr-grow wow fadeIn" data-wow-delay=".5s" alt="Наш блог">
    </section>
    <section class="about-company wow fadeIn">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- About company slider -->
            <div class="ac-slider">
              <div class="ac-slide">
                <img src="https://pp.userapi.com/c837432/v837432134/3f492/w7-GFWjtFqA.jpg">
              </div>
              <div class="ac-slide">
                <img src="https://pp.userapi.com/c837432/v837432134/3f51e/_eaHeAClR2o.jpg">
              </div>
              <div class="ac-slide">
                <img src="https://pp.userapi.com/c837432/v837432134/3f4c4/u386zdtDPvY.jpg">
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="ac-title wow fadeIn">
              О компании
            </h1>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <h3 class="ac-subtitle wow fadeIn">
              Мы из Коми. И мы гордимся этим
            </h3>
            <p class="ac-desc wow fadeIn">
              Продукция Город на Сысоле создается<br>
              в нашей Республике.
            </p>
            <p class="ac-desc wow fadeIn">
              Сначала мы воплощаем лучшие идеи  принтов на <br>бумаге. Затем картинка переносится в специальную <br>программу
              и на производство уже передается в векторном<br> формате. 
            </p>
            <p class="ac-desc wow fadeIn">
              На производстве закупается качественная ткань, далее<br> 
              ее кроят, отшивают продукцию, брендируют. 
            </p>
          </div>
          <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
            <p class="ac-desc wow fadeIn">
              После этого происходит контроль качества изготовленной <br>партии и она отправляется на склад, где происходит сортировка. <br>Со склада Продукция отправляется к нашим клиентам.
            </p>
          </div>
          <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="process-box wow fadeIn hvr-grow" data-wow-duration=".5s">
                  <img src="<?php bloginfo('template_url');?>/images/icon/icon-1.png" alt="Оригинальные принты">
                  <span>Оригинальные<br>принты</span>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="process-box wow fadeIn hvr-grow" data-wow-duration=".7s">
                  <img src="<?php bloginfo('template_url');?>/images/icon/icon-2.png" alt="Доставка по России">
                  <span>Доставка по<br>России</span>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="process-box wow fadeIn hvr-grow" data-wow-duration=".9s">
                  <img src="<?php bloginfo('template_url');?>/images/icon/icon-3.png" alt="Качественные материалы">
                  <span>Качественные<br>материалы</span>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="about.html" class="more-about-us hvr-grow">Больше о нас</a>
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
          <img src="<?php bloginfo('template_url');?>/images/icon/instagram.svg" alt="Иконка инстаграма">
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
    