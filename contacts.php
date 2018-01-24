<?php 
	/*
		Template Name: Контакты
	*/
?>

<?php 
	get_template_part( 'header', 'about');
	
?>
    <div class="cuhi under-header-images">
        
    </div>
    
    <div class="page-content">
      <div class="pc-header" id="header">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h1 class="pages-title contacts-title wow fadeIn">Наши контакты</h1>
                      <p class="contacts-subtitle">
                        Ждем тебя в нашем уютном шоу-руме. Подберите подарок для себя <br>и своих родных за чашечкой чая и приятной бседой
                      </p>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="contacts-item-wrap ciw1 wow bounceIn">
                    <img src="<?php bloginfo('template_url');?>/images/icon/clock-contacts.svg" alt="Номер" class="contacts-icon">
                    <div class="contacts-desc">
                      <span>Звоните нам</span>
                      <h3>
					  <?php
							if ( is_active_sidebar( 'number') ) : ?>
								<div>
								<?php dynamic_sidebar( 'number' ); ?>
								</div>
						<?php endif; ?>
					  </h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="contacts-item-wrap ciw2 wow bounceIn">
                    <img src="<?php bloginfo('template_url');?>/images/icon/placeholder.svg" alt="Номер" class="contacts-icon">
                    <div class="contacts-desc">
                      <span>Приходите в гости</span>
                      <h3>
						<?php
							if ( is_active_sidebar( 'adress') ) : ?>
								<div>
								<?php dynamic_sidebar( 'adress' ); ?>
								</div>
						<?php endif; ?>
					  </h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="contacts-item-wrap ciw3 wow bounceIn">
                    <img src="<?php bloginfo('template_url');?>/images/icon/smartphone.svg" alt="Номер" class="contacts-icon">
                    <div class="contacts-desc">
                      <span>Мы открыты</span>
                      <h3>
							<?php
							if ( is_active_sidebar( 'mode') ) : ?>
								<div>
								<?php dynamic_sidebar( 'mode' ); ?>
								</div>
						<?php endif; ?>
					  </h3>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="contacts-map wow bounceIn">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <?php
				if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
					<div>
					<?php dynamic_sidebar( 'custom-header-widget' ); ?>
					</div>
			<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
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