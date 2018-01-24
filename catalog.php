<?php 
	/*
		Template Name: Каталог
	*/
?>

<?php 
	get_template_part( 'header', 'about');
	
?>

    <div class="catalog-under-header-images under-header-images">
    </div>
    <section class="catalog-production page-content">
        <!-- Верхняя часть контента страницы -->
        <div class="pc-header" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="pages-title cp-title wow fadeIn">каталог продукции</h1>
                    </div>
                     <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <div class="show wow fadeIn">
                             <span>Показать</span>
                             <div class="show-items">
                               <a href="#" class="show-active">20</a>
                               <a href="#">60</a>
                               <a href="#">120</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-offset-2 col-lg-7 col-md-8 col-sm-8 col-xs-12">
                         <div class="sort wow fadeIn">
                             <span>Сортировать</span>
							 
							 <?php 

								
								function checkGet() { //функция таскает за собой аргументы для фильтрации товара
									$param = '';
									
										if(!empty($_GET)) {
											foreach($_GET as $key => $val) {
												$param = $param . $key . '=' . $val . '&';
											}
										}
										$param = mb_substr($param, 0, -1);
										
										return $param;
								}
								
								function delGet($arg = null) { 
									$arr = [];
									$param = '';
									
										if(!empty($_GET)) {
											foreach($_GET as $key => $val) {
												$arr[$key] = $val;
											}
										}
										
										unset($arr[$arg]);
										
										foreach($arr as $key2 => $val2) {
												$param = $param . $key2 . '=' . $val2 . '&';
												
											}
										$param = mb_substr($param, 0, -1);
										
										return $param;
								}
								
								
									
										
										
										if($_GET['sort'] == 'asc') {
											echo '<a href="?'.checkGet().'&sort=desc" >по умолчанию</a>';
											echo '<a href="" class="sort-active">возрастанию цены</a>';
											echo '<a href="?'.checkGet().'&sort=desc">убыванию цены</a>';
										}
										
										elseif($_GET['sort'] == 'desc') {
											echo '<a href="" class="sort-active">по умолчанию</a>';
											echo '<a href="?'.checkGet().'&sort=asc" >возрастанию цены</a>';
											echo '<a href="" class="sort-active">убыванию цены</a>';
										}
										
										else {
											echo '<a href="" class="sort-active">по умолчанию</a>';
											echo '<a href="?'.checkGet().'&sort=asc" >возрастанию цены</a>';
											echo '<a href="?'.checkGet().'&sort=desc" ">убыванию цены</a>';
										}
							?>
							 
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Основной контент страницы -->
		
        <div class="pc-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <button data-toggle="collapse" class="collapse-btn collapse-print" data-target="#select-print">Выбрать принт</button>

                        
                        <aside class="select-print sidebar wow fadeIn sidebar-show">
                            <div class="sp-header sidebar-header">
                                <h4 class="sp-title sidebar-title">
                                    Выбрать принт
                                </h4>
                                <a href="?<?php echo delGet('print');?>" class="reset">
                                    Сбросить
									
                                </a>
                            </div>
							
                            <div class="sp-body sidebar-body">
							
							<?php 
								$parent_id = 7;

							# получаем дочерние рубрики
							$sub_cats = get_categories( array(
								'child_of' => $parent_id,
								'hide_empty' => 0
							) );
							
							
							
							if( $sub_cats ){
								foreach( $sub_cats as $cat ){

									echo '<div class="sp-item wow fadeIn">';
                                   echo '<div class="sp-img ">';
									echo '<img src="'. $cat->description .'" alt="Принт">';
									echo '</div>';
									
									
									
                                    echo '<a href="?'.checkGet().'&print='.$cat->name.'" class="sp-active-link search-print">';
										$arrPrint = explode(' ', $cat->name);
										
                                        echo '<strong>' .array_shift($arrPrint). '</strong><br>' . implode(' ', $arrPrint);
                                    echo '</a>';
                                echo '</div>';

								}
							}
								
							?>
							
	
                            </div>
                        </aside>

                        <button data-toggle="collapse" class="collapse-btn collapse-category" data-target="#select-category">Категории</button>

            

                        <aside class="category-sidebar sidebar wow fadeIn sidebar-show">
                            <div class="cs-header sidebar-header">
                                <h4 class="cs sidebar-title">Категория</h4>
                                <a href="?<?php echo delGet('cat');?>" class="reset">
                                    Сбросить
                                </a>
                            </div>
                            <div class="cs-body sidebar-body">
							
							<?php 
								$parent_id = 8;

							# получаем дочерние рубрики
							$sub_cats = get_categories( array(
								'child_of' => $parent_id,
								'hide_empty' => 0
							) );
							
						
							if( $sub_cats ){
								foreach( $sub_cats as $cat ){
								
									if($cat->parent == 8) { //что бы выводить только последние подкатегории
										continue;
									}
									
									else {
											echo '<div class="cs-item wow fadeIn">';
											echo '<label class="chooise-cat">';
												 echo '<input type="checkbox" id="checkbox" class="checkbox">';
												 echo '<span class="checkbox-custom"></span>';
												 echo '<span class="label">'.$cat->name.'</span>';
												 echo '<a href="?'.checkGet().'&cat='.$cat->term_id.'" class="cat-id"></a>';
												 
											 echo '</label>';
										echo '</div>';
									}
								}
							}
								
							?>
                            </div>
							
							
							<script>
								var checkbox = document.querySelectorAll('.chooise-cat');
								
								checkbox.forEach(function(item, i) {
									checkbox[i].addEventListener('click', function(e) {
										var catId = e.target.parentElement.querySelector('.cat-id').click();
									})
								})

							</script>
							
                        </aside>

      

                        <aside class="gender-sidebar sidebar sidebar-show">
                            <div class="gs-header sidebar-header">
                                <h4 class="gs-title sidebar-title wow fadeIn">Пол</h4>
                                <a href="?<?php echo delGet('gender');?>" class="reset wow fadeIn">Сбросить</a>
                            </div>
                            <div class="gs-body sidebar-body">
							
							<?php 
								$parent_id = 9;

							# получаем дочерние рубрики
							$sub_cats = get_categories( array(
								'child_of' => $parent_id,
								'hide_empty' => 0
							) );
							if( $sub_cats ){
								foreach( $sub_cats as $cat ){
								
								echo '<div class="gs-item wow fadeIn">';
                                    echo '<label class="chooise-gender">';
                                        echo '<input class="checkbox" type="checkbox" name="checkbox-test">';
                                        echo '<span class="checkbox-custom"></span>';
                                        echo '<span class="label">'.$cat->name.'</span>';

										echo '<a href="?'.checkGet().'&gender='.$cat->slug.'" class="cat-id"></a>';
										
										
                                    echo '</label>';
                                echo '</div>';

								}
							}
								
							?>

                            </div>
							
							<script>
								var gender = document.querySelectorAll('.chooise-gender');
								
								gender.forEach(function(item, i) {
									gender[i].addEventListener('click', function(e) {
										var catId = e.target.parentElement.querySelector('.cat-id').click();
									})
								})

							</script>
                        </aside>
						
						

                        <aside class="size-sidebar sidebar">
                            <div class="ss-header sidebar-header">
                                <h4 class="ss-title sidebar-title wow fadeIn">Размер</h4>
                                <a href="?<?php echo delGet('size');?>" class="reset wow fadeIn">Сбросить</a>
                            </div>
                            <div class="ss-body sidebar-body wow fadeIn">
                               <div class="ss-item">
                                   <div class="btn-group">
                                     <select role="menu" class="form-control" onchange="location=this.value">
									 <option>Выбрать</option>
									 <?php 
									 
									 $parent_id = 10;

									# получаем дочерние рубрики
									$sub_cats = get_categories( array(
										'child_of' => $parent_id,
										'hide_empty' => 0
									) );
									if( $sub_cats ){
										foreach( $sub_cats as $cat ){
										
										 echo '<option value="?'.checkGet().'&size='.$cat->slug.'">' .$cat->name. '</option>';
										
										}
									}
									 
									 ?>
									 
                                     </select>
                                   </div>
								   
                               </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="catalog-content">
                            <div class="row">
                   <?php 
				  
				 if(!empty($_GET['cat'])) {
					$id = (int)$_GET['cat'];
				 }
				 else {
					$id=8; // ID заданной рубрики
				 }
				 
				  $sort = 'desc';
			 
				 if(!empty($_GET['sort'])) {
					if($_GET['sort'] == 'asc') {
						$sort = 'ASC';
					}
					if($_GET['sort'] == 'desc') {
						$sort = 'DESC';
					}
				 }
				 
				 $separ = explode('/', $_SERVER['REQUEST_URI'])[2];
									$separ2 = explode('=', $separ);
									$page = $separ2[1];
									
									
									if($separ2[0] == '?pagen') {
										$page = preg_replace('/(\d+).*/', '$1', $separ2[1]);
									}
									else {
										$page = 1;
									}
									
				 
				$arr = [
					'posts_per_page' => 2,
					'cat' => $id,
					'meta_query' => [],
					'meta_key' => 'price',
					'orderby' => 'meta_value_num',
					'order' => $sort,
					'paged' => $page
				];
				
				
				
			 
			 if(!empty($_GET['gender'])) {
				if($_GET['gender'] == 'female') {
					$arr['meta_query']=[['key' => 'gender', 'value' => $_GET['gender']]];
				}
				if($_GET['gender'] == 'male') {
					$arr['meta_query']=[['key' => 'gender', 'value' => $_GET['gender']]];
				}
			 }
			 
				if(!empty($_GET['print'])) {
					array_push($arr['meta_query'],['key' => 'print', 'value' => $_GET['print']]);
				}
				
				if(!empty($_GET['size'])) {
					array_push($arr['meta_query'],['key' => 'size', 'value' => $_GET['size']]);
				}
				

				$recent = new WP_Query($arr);
				
					if(empty(get_category($id)->count)) {
						echo '<h3 style="position:absolute; left: 40%; top: 0; font-weight: bold; color: blue">Товаров нет.</h3>';
					} 
					
				while($recent->have_posts()) : $recent->the_post();?>
				
				
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="product-box wow fadeIn">
					
					
					
						<?php the_post_thumbnail([260, 412]);?>
						 <div class="pb-header">
                                <a href="card-prod.html" class="pb-fovarite"></a>
                                    <div class="pb-more">
                                <a href="<?php the_permalink(); ?>">Подробнее</a>
                             </div>
                         </div>
						 <div class="pb-info">
                            <h3 class="pb-title"><span><?php the_title(); ?></span></h3>
                                <span class="pb-subtitle"> <?php echo (get_post_meta($post->ID, 'print', true)); ?></span>
                                 <div class="pb-size-wrap">
                                      <span>Размеры</span>
									<a href="#" class="pb-active"><?php echo (get_post_meta($post->ID, 'print', true)); ?></a>

                                     </div>
                          </div>
						   <div class="pb-bottom">
                                           <span class="pb-price">
                                               <?php echo (get_post_meta($post->ID, 'price', true)); ?> ₽
                                           </span>
                                           <div class="pb-buy">
                                               <a href="?basket=<?php echo $post->ID?>">В корзину</a>
                                           </div>
                             </div>
					</div>
					
					
					
				</div>
				
			
			
			
				<?php endwhile; ?>
				
				
				
				
                               
                            </div>
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
					
					var tovar = document.querySelectorAll('.pb-buy');
					
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
										$newArr = array_reverse($arr);
										$output = array_slice($newArr, -3, 3); 
										
										foreach($output as $key => $val) {
											echo '<li><a href=?pagen='.$val.'&'.checkGet().'>'. $val .'</a></li>';
											
										}

									}
									
									for($i = $page; $i <= $countPag; $i++) {
										if($page == $i) {
												echo '<li><a href="#" class="pagination-active">' . $i .'</a></li>';
										}
										else {
											
											echo '<li><a href=?pagen='.$i.'&'.checkGet().'>'. $i .'</a></li>';
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