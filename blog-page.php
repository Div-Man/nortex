<?php get_template_part( 'header', 'about');?>

<div class="under-header-images blog-under-header-images">
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
      <div class="blog-body page-content">
        <div class="container">
          <div class="row">
            <div class="bb-content clearfix">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
				
				<?php 
					$imageUrl1 = get_post_meta( get_the_ID(), 'artimage1' )[0] ;
					$imageUrl2 = get_post_meta( get_the_ID(), 'artimage2' )[0] ;
					$imageUrl3 = get_post_meta( get_the_ID(), 'artimage3' )[0] ;
					$imageUrl4 = get_post_meta( get_the_ID(), 'artimage4' )[0] ;
					
					$mark = get_the_category($post->ID)[0]->name; //метка на раздел
					
				?>
				
				
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Blog page Big image -->
					<img src="<?php bloginfo('template_url');?><?php echo $imageUrl1;?>" alt="Блог" class="bp-b-i bp-img">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <!-- Blog page Medium image -->
                    <img src="<?php bloginfo('template_url');?><?php echo $imageUrl2;?>" alt="Блог" class="bp-m-i bp-img">
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <!-- Blog page Small image -->
                    <img src="<?php bloginfo('template_url');?><?php echo $imageUrl3;?>" alt="Блог" class="bp-img bp-s-i-top">
                    <img src="<?php bloginfo('template_url');?><?php echo $imageUrl4;?>" alt="Блог" class="bp-img bp-s-i-bottom">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="bp-top">
                  <a href="#" class="blog-label blog-tag bp-tag">
                   <?php echo $mark;?>
                  </a>
                  <a href="#" class="blog-label blog-date bp-date">
                   <?php 
						echo dateArticle($post->post_date);
					?>
                  </a>
                </div>
                <div class="bp-body">
                  <h1 class="bp-title">
                    <?php the_title(); ?>
                  </h1>
				  
				  <?php echo $post->post_content?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="comment">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="comment-title">
              Ваши комментарии
            </h3>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="pagination-wrap">
                  <ul class="pagination">
                      <li><a href="#" class="pagination-active">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                  </ul>
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
   