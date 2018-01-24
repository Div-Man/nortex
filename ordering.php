
<?php 
	/*
		Template Name: Корзина
	*/


if(!empty($_POST['newZakaz'])) {
	if(!empty($_POST['userName']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
		
		$pattern = "/^tovar\d+$/";
		foreach ($_COOKIE as $key => $value) { 
			$result = preg_match($pattern, $key);
			if($result) {
				setcookie($key, null, -1, '/');
			}
		}
	}
	
	
}
?>

<?php 
	get_template_part( 'header', 'about');
	
?>
    <div class="under-header-images pc-under-header-images">
    </div>
    <div class="product-content page-content">
      <div class="pc-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="pc-title pages-title">оформление заказа</h1>
            </div>
            <div class="col-lg-12">
              <div class="breadcrumbs">
                <ul>
                  <li><a href="index.html">Главная</a></li>
                  <li><a href="card-prod.html">Карточка продукта</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="pc-body product-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <table class="product-list">
                <tr class="pl-titles">
                  <th class="pl-title plt-good">
                    <h3>Товар</h3>
                  </th>
                  <th class="pl-title plt-size">
                    <h3>Размер</h3>
                  </th>
                  <th class="pl-title plt-size">
                    <h3>Цена</h3>
                  </th>
                </tr>
				
				 <?php 
						
					$pattern = "/^tovar\d+$/";
						foreach ($_COOKIE as $key => $value) { 
							$result = preg_match($pattern, $key);
							if($result)
							{
							
							 echo '<tr class="pl-row">';
							   echo '<th class="plc-item pr-good">';
								 echo get_the_post_thumbnail($value, array(90, 110));
								 echo '<span class="plc-good">'.get_post($value)->post_title.'</span>';
							   echo '</th>';
							   echo '<th class="plc-item pr-size">';
								 echo '<span class="plc-size">'.get_post_meta($value, 'size', true).'</span>';
							   echo '</th>';
							   echo '<th class="plc-item pr-price">';
								 echo '<span class="plc-price">'.get_post_meta($value, 'price', true).'</span>';
							   echo '</th>';
							   echo '<th class="remove-prod">';
								 echo '<button data-id="'.$key.'" class="remove-btn"></button>';
							   echo '</th>';
							 echo '</tr>';
								
							}
						}
				?>
                
              </table>
			  
			  <script>
				function delete_cookie(name) {
				  document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
				}
					
				var tr = document.querySelectorAll('.pl-row');	
					
				var tovar = document.querySelectorAll('.remove-btn');
				
				tovar.forEach(function(item, i) {
							tovar[i].addEventListener('click', function(e) {
								e.preventDefault();
								var name = e.target.getAttribute('data-id');
								delete_cookie(name);
								tr[i].innerHTML = '<p style="color: red; font-size: 20px;">Удалено</p>';
								console.log(name);
							})
						})
			  </script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product-form form">
      <div class="container">
        <div class="col-lg-12">
          <div class="form-wrapper">
            <div class="row">
			<form action="" method="POST">
				  <div class="col-lg-3">
					<div class="form-group">
					  <label>Ваше имя:</label>
					  <input name="userName" type="text" placeholder="Например, Ирина" class="form-control">
					</div>
				  </div>
				  <div class="col-lg-3">
					<div class="form-group">
					  <label type="phone">Ваш телефон</label>
					  <input name="phone" type="phone" placeholder="+7 (___) ___ __ __" class="form-control">
					</div>
				  </div>
				  <div class="col-lg-3">
					<div class="form-group">
					  <label type="email">Ваш телефон</label>
					  <input name="email" type="email" placeholder="mail@mail.ru" class="form-control">
					</div>
				  </div>
				  <div class="col-lg-3">

					<input type="submit" name="newZakaz" value="Отправить заявку" class="hvr-grow form-sumbit" style="margin-top: 30px;
						width: 223px;
						height: 52px;
						border-radius: 100px;
						text-align: center;
						line-height: 52px;
						color: #fff;
						font-weight: 700;
						font-size: 14px;
						border: 0;
						outline: none;
						background-image: linear-gradient(103deg,#029ed7,#0bcbc8);
						padding-left: 5px;">
						

					
				  </div>
			  </form>
			  
			
            </div>
          </div>
		  
		    <?php 
			  $arr = [];
				if(!empty($_POST['newZakaz'])) {
					if(!empty($_POST['userName']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
					
					$pattern = "/^tovar\d+$/";
						foreach ($_COOKIE as $key => $value) { 
							$result = preg_match($pattern, $key);
							if($result) {
								$arr[] = $value;
							}
						}
				$arr = implode(",", $arr);
				$name = 'Имя: ' . $_POST['userName'];
				$tel = 'Телефон: ' . $_POST['phone'];
				$em = 'Email: ' . $_POST['email'];
					

				$file = 'order.txt';
						
				$fp = fopen($file, 'a+');
				fwrite($fp, $name . "\r\n");
				fwrite($fp, $tel . "\r\n");
				fwrite($fp, $em . "\r\n");
				fwrite($fp, 'Номера заказов: ' . $arr . "\r\n");
				fwrite($fp, '----------------------------------------------------' . "\r\n");
				fclose($fp);
				
				
				echo '<p style="text-align: center; color: blue; font-size: 20px;">Заказ принят на обработку, ждите звонок</p>';
				
	
				}
				else {
					echo '<p style="text-align: center; color: red; font-size: 20px;">Заполните все поля</p>';	
				}
				}
			  ?>
          <div class="under-form">
            <span>Мы не будем тратить ваше время на долгое заполнение формы<br>
            Все остальное мы уточним по телефону :)</span>
          </div>
        </div>
      </div>
    </section>
    <section class="recommended">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="r-title">
              <h3>Так же с этим товаром смотрят</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
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
          <div class="col-lg-3">
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
          <div class="col-lg-3">
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
          <div class="col-lg-3">
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
