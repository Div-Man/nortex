<?php get_template_part( 'header', 'about');?>
		
 <div class="under-header-images pc-under-header-images">
    </div>
    <!-- card product content -->
    <div class="cp-content page-content">
      <div class="cp-header pc-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="pc-title pages-title">Карточка продукта</h1>
            </div>
            <div class="col-lg-12">
              <div class="breadcrumbs">
                <ul>
                  <li><a href="index.html">Главная</a></li>
                  <li><a href="card-prod.html">Карточка продукта</a></li>
                  <li><a href="ordering.html">Карточка Товара</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
              <div class="cp-slider">
                <div class="cp-slide">
				
				<?php 
					
					$imageUrl1 = get_post_meta( get_the_ID(), 'image1' )[0] ;
					$imageUrl2 = get_post_meta( get_the_ID(), 'image2' )[0] ;
					$imageUrl3 = get_post_meta( get_the_ID(), 'image3' )[0] ;
					$imageUrl4 = get_post_meta( get_the_ID(), 'image4' )[0] ;
				?>
				
				
                 <img src="<?php bloginfo('template_url');?><?php echo $imageUrl1;?>">
                </div>
                <div class="cp-slide">
                  <img src="<?php bloginfo('template_url');?><?php echo $imageUrl2;?>">
                </div>
                <div class="cp-slide">
                   <img src="<?php bloginfo('template_url');?><?php echo $imageUrl3;?>">
                </div>
                 <div class="cp-slide">
                   <img src="<?php bloginfo('template_url');?><?php echo $imageUrl4;?>">
                </div>
              </div>
              <div class="cp-slider-thumb">
                <div class="cp-slide-thumb">
                  <img src="<?php bloginfo('template_url');?><?php echo $imageUrl1;?>">
                </div>
                <div class="cp-slide-thumb">
                   <img src="<?php bloginfo('template_url');?><?php echo $imageUrl2;?>">
                </div>
                <div class="cp-slide-thumb">
                   <img src="<?php bloginfo('template_url');?><?php echo $imageUrl3;?>">
                </div>
                <div class="cp-slide-thumb">
                   <img src="<?php bloginfo('template_url');?><?php echo $imageUrl4;?>">
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
              <div class="cp-inf">
                <h3 class="cp-inf-title">
                  <?php the_title(); ?>
                </h3>
                <span class="cp-ifn-subtitle"><?php echo (get_post_meta($post->ID, 'print', true)); ?></span>
                <p class="cp-inf-desc"><?php echo (get_post_meta($post->ID, 'description', true)); ?> </p>
                <span class="cp-inf-color">
                  Цвет
                </span>
                <a class="cp-inf-subcolor">
                  <?php echo (get_post_meta($post->ID, 'color', true)); ?>
                </a>
                <div class="cp-inf-size">
                  <span>
                    Размер
                  </span>
                  <a href="#" class="cp-active"><?php echo (get_post_meta($post->ID, 'size', true)); ?></a>
                </div>
                <p class="cp-inf-subsize">
                    Пожалуйста, выберите верный размер.<br>
                    Для этого вы можете ознакомиться
                </p>
                <a href="#" class="see-table">Смотреть таблицу</a>
                <div class="cp-inf-bottom">
                  <span class="cp-inf-price">
                    <?php echo (get_post_meta($post->ID, 'price', true)); ?> ₽
                  </span>
                  <a href="?basket=<?php echo $post->ID?>" class="cp-inf-basket cp-inf-btn">
                    В корзину
                  </a>
                  <a href="#" class="cp-inf-favorites cp-inf-btn">
                    В избранное
                  </a>
                </div>
				
				<script>
					function getCookie(name) {
						var cookie = " " + document.cookie;
						var search = " " + name + "=";
						var setStr = null;
						var offset = 0;
						var end = 0;
						if (cookie.length > 0) {
							offset = cookie.indexOf(search);
							if (offset != -1) {
								offset += search.length;
								end = cookie.indexOf(";", offset)
								if (end == -1) {
									end = cookie.length;
								}
								setStr = unescape(cookie.substring(offset, end));
							}
						}
						return(setStr);
					}
					
					var tovar = document.querySelectorAll('.cp-inf-basket');
					
					tovar.forEach(function(item, i) {
							tovar[i].addEventListener('click', function(e) {
								e.preventDefault();
								var id = e.target.getAttribute('href').split('=')[1];
								
								
								if(getCookie('tovar'+i)) {
									var count = Math.floor(Math.random() * (1000 - 1)) + 1;
									document.cookie = "tovar"+count+"="+id+"; path=/;";
									e.target.innerHTML = 'Добавлено';
								}
								
								else {
									document.cookie = "tovar"+i+"="+id+"; path=/;";
									e.target.innerHTML = 'Добавлено';
								}
							})
						})
						
						
	
					
					
				</script>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
              <div class="share-social">
                <span>Поделиться в социальных сетях</span>
                <a href="https://vk.com/sysole" class="social-link vk"></a>
                <a href="https://www.instagram.com/gorod_na_sysole/" class="social-link inst"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
              <div class="print-description-wrap clearfix">
                <h3 class="pd-title">
                  Описание принта
                </h3>
                <img class="pd-img" src="https://pp.userapi.com/c639625/v639625134/2080c/iAWEiLSoM-E.jpg" alt="Описание принта">
                <p class="print-desc">
                  Мы вдохновились ланшавтом и духом нашего<br> города, который является самым сердцем<br> Республики Коми.
                </p>
                <p class="print-desc">
                  Самые лучшие виды природы, окружающей город<br>
                  легли в эскиз, который позже станет согревать<br>
                  и радовать жителей Сыктывкара в любой точке<br>
                  мира, в дали от дома<br>
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
              <div class="about-product">
                <h3 class="pd-title">
                  О товаре
                </h3>
                <ul class="ap-composition">
				
                  <li><span><?php echo (get_post_meta($post->ID, 'tovar1', true)); ?></span></li>
                  <li><span><?php echo (get_post_meta($post->ID, 'tovar2', true)); ?></span></li>
                  <li><span><?php echo (get_post_meta($post->ID, 'tovar3', true)); ?></span></li>
                  <li><span><?php echo (get_post_meta($post->ID, 'tovar4', true)); ?></span></li>
                  <li><span><?php echo (get_post_meta($post->ID, 'tovar5', true)); ?></span></li>
                  <li><span><?php echo (get_post_meta($post->ID, 'tovar6', true)); ?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="recommended">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="r-title">
              <h3>Товары с этим принтом</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="recommended-box">
              <div class="rb-header">
                <img src="images/people/catalog/front.jpg" alt="Рекомендации">
              </div>
              <div class="rb-body">
                <h5 class="rb-title">
                  Футболка
                </h5>
                <span class="rb-subtitle">
                  Сыктывкар. Родные места
                </span>
                <span class="rb-price">
                  1200 ₽
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="recommended-box">
              <div class="rb-header">
                <img src="images/people/catalog/front.jpg" alt="Рекомендации">
              </div>
              <div class="rb-body">
                <h5 class="rb-title">
                  Футболка
                </h5>
                <span class="rb-subtitle">
                  Сыктывкар. Родные места
                </span>
                <span class="rb-price">
                  1200 ₽
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="recommended-box">
              <div class="rb-header">
                <img src="images/people/catalog/front.jpg" alt="Рекомендации">
              </div>
              <div class="rb-body">
                <h5 class="rb-title">
                  Футболка
                </h5>
                <span class="rb-subtitle">
                  Сыктывкар. Родные места
                </span>
                <span class="rb-price">
                  1200 ₽
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="recommended-box">
              <div class="rb-header">
                <img src="images/people/catalog/front.jpg" alt="Рекомендации">
              </div>
              <div class="rb-body">
                <h5 class="rb-title">
                  Футболка
                </h5>
                <span class="rb-subtitle">
                  Сыктывкар. Родные места
                </span>
                <span class="rb-price">
                  1200 ₽
                </span>
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