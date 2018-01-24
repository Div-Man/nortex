<footer class="footer">
      <div class="go-top" id="go-top">
        <a href="#header" class="hvr-icon-bob"></a>
      </div>
      <div class="first-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
              <ul class="ff-nav ff-nav-left">
			  
                <li><a href="print.html">принты</a></li>
                <li><a href="lookbook.html">галерея</a></li>
                <li><a href="catalog.html">каталог</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              <img class="ff-logo" src="<?php bloginfo('template_url');?>/images/footer-logo.png" alt="Логотип">
              <span class="ff-copyright">
                2017. Все права защищены
              </span>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
              <ul class="ff-nav ff-nav-right">
                <li><a href="blog.html">блог</a></li>
                <li><a href="#">о нас</a></li>
                <li><a href="#">контакты</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="second-footer">
        <div class="container">
          <div class="row">
            <div class="second-footer-items">
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <ul class="sf-nav sf-nav-left">
                  <li><a href="#">Футболки</a></li>
                  <li><a href="#">Толстовки</a></li>
                  <li><a href="#">Свитшоты</a></li>
                </ul>
                <ul class="sf-nav sf-nav-left">
                  <li><a href="#">Майки</a></li>
                  <li><a href="#">Шапки</a></li>
                  <li><a href="#">Лонгсливы</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="sf-middle">
                  <div class="sf-numb">
                    <h3>
                      +7 (904) 2222 458
                    </h3>
                    <span>Поможем оформить заказ</span>
                  </div>
                  <div class="sf-logo">
                    <a href="#">
                      <img src="<?php bloginfo('template_url');?>/images/nortex-footer-logo.png" alt="Разработанно в Nortex">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <ul class="sf-nav sf-nav-right">
                  <li><a href="#">Чехлы на подушку</a></li>
                  <li><a href="#">Чехлы на телефон</a></li>
                  <li><a href="#">Наклейки</a></li>
                </ul>
                <ul class="sf-nav sf-nav-right">
                  <li><a href="#">Магниты</a></li>
                  <li><a href="#">Чехлы на телефон</a></li>
                  <li><a href="#">Открытки</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
	
	<?php wp_footer(); ?>
	
	<script src="<?php echo get_template_directory_uri();?>/scripts/vendor.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/scripts/plugins.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/scripts/main.js"></script>
	
	<script>
		jQuery(function($){
		var date = new Date();
		var days = 30;
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		$('.lp-like').click(function(){
		var likevalue = $(this).data('like');
		
		$.ajax({
		url: "/wp-admin/admin-ajax.php",
		type:'POST',
		data: {'action': 'lpestimate','likes': likevalue,},
		success: function(data){
		$('#lk' + likevalue).html(data);
		var likename = 'likename_' + likevalue;
		},
		});
		});
		});
		</script>
  </body>
</html>
