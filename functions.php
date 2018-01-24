<?php 



function style_script_load() {
	wp_enqueue_style('vendor.css',  get_template_directory_uri() . '/vendor.css', '', null, false);
	wp_enqueue_style('style.css',  get_template_directory_uri() . '/style.css', '', null, false);
	wp_enqueue_script( 'modernizr.js', get_template_directory_uri() . '/scripts/vendor/modernizr.js', '', null, false);
}

add_action('wp_enqueue_scripts', 'style_script_load');


function load_my_scripts() {
	wp_enqueue_script('test.js', get_template_directory_uri() . '/scripts/test.js', '', null, true);
	wp_enqueue_script( 'vendor.js', get_template_directory_uri() . '/scripts/vendor.js', '', null, true);
	wp_enqueue_script( 'plugins.js', get_template_directory_uri() . '/scripts/plugins.js', '', null, true);
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/scripts/main.js', '', null, true);
}

add_action('wp_enqueue_scripts', 'load_my_scripts');

add_theme_support('post-thumbnails');

register_nav_menu('menu', 'Меню в шапке');

register_nav_menu('menu2', 'Корзина');

register_nav_menu('category', 'Категории');


/////////////////////////////////////////


add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}


// код блока
function extra_fields_box_func( $post ){
	?>
	
	<p><b>Поля для статей блога (в начале нуже слеш)</b></p>
	<p><label><input type="text" name="extra[artimage1]" value="<?php echo get_post_meta($post->ID, 'artimage1', 1); ?>" style="width:50%" /> Изображение 1</label></p>
	<p><label><input type="text" name="extra[artimage2]" value="<?php echo get_post_meta($post->ID, 'artimage2', 1); ?>" style="width:50%" /> Изображение 2</label></p>
	<p><label><input type="text" name="extra[artimage3]" value="<?php echo get_post_meta($post->ID, 'artimage3', 1); ?>" style="width:50%" /> Изображение 3</label></p>
	<p><label><input type="text" name="extra[artimage4]" value="<?php echo get_post_meta($post->ID, 'artimage4', 1); ?>" style="width:50%" /> Изображение 4</label></p>
	
	<p><b>Поля для главного слайдера</b></p>
	<p><label><input type="text" name="extra[printname1]" value="<?php echo get_post_meta($post->ID, 'printname1', 1); ?>" style="width:50%" /> Название принта (основное, обязательно)</label></p>
	<p><label><input type="text" name="extra[printname2]" value="<?php echo get_post_meta($post->ID, 'printname2', 1); ?>" style="width:50%" /> Название принта (необязательно)</label></p>
	<p><label><input type="text" name="extra[printlink]" value="<?php echo get_post_meta($post->ID, 'printlink', 1); ?>" style="width:50%" /> Ссылка на принт (для каталога)</label></p>
	
	<p>Краткое описание
		<textarea type="text" name="extra[descriptionSlide]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'descriptionSlide', 1); ?></textarea>
	</p>
	
	<p><label><input type="text" name="extra[print-back]" value="<?php echo get_post_meta($post->ID, 'print-back', 1); ?>" style="width:50%" /> Задний фон принта</label></p>
	<p><label><input type="text" name="extra[print-front-wrap]" value="<?php echo get_post_meta($post->ID, 'print-front-wrap', 1); ?>" style="width:50%" /> Футболка</label></p>
	
	
	<p><b>Поля для лукбука</b></p>
	<p><label><input type="text" name="extra[lookbook1]" value="<?php echo get_post_meta($post->ID, 'lookbook1', 1); ?>" style="width:50%" /> Слайд 1</label></p>
	<p><label><input type="text" name="extra[lookbook2]" value="<?php echo get_post_meta($post->ID, 'lookbook2', 1); ?>" style="width:50%" /> Слайд 2</label></p>
	<p><label><input type="text" name="extra[lookbook3]" value="<?php echo get_post_meta($post->ID, 'lookbook3', 1); ?>" style="width:50%" /> Слайд 3</label></p>
	<p><label><input type="text" name="extra[lookbook4]" value="<?php echo get_post_meta($post->ID, 'lookbook4', 1); ?>" style="width:50%" /> Слайд 4</label></p>
	<p><label><input type="text" name="extra[lookbook5]" value="<?php echo get_post_meta($post->ID, 'lookbook5', 1); ?>" style="width:50%" /> Слайд 5</label></p>
	<p><label><input type="text" name="extra[lookbook6]" value="<?php echo get_post_meta($post->ID, 'lookbook6', 1); ?>" style="width:50%" /> Слайд 6</label></p>
	<p><label><input type="text" name="extra[lookbook7]" value="<?php echo get_post_meta($post->ID, 'lookbook7', 1); ?>" style="width:50%" /> Слайд 7</label></p>
	
	<p><b>Поля для каталога</b></p>
	
	
	<p><label><input type="text" name="extra[color]" value="<?php echo get_post_meta($post->ID, 'color', 1); ?>" style="width:50%" /> Цвет </label></p>
	
	<p><label><input type="text" name="extra[image1]" value="<?php echo get_post_meta($post->ID, 'image1', 1); ?>" style="width:50%" /> Изображение 1</label></p>
	<p><label><input type="text" name="extra[image2]" value="<?php echo get_post_meta($post->ID, 'image2', 1); ?>" style="width:50%" /> Изображение 2</label></p>
	<p><label><input type="text" name="extra[image3]" value="<?php echo get_post_meta($post->ID, 'image3', 1); ?>" style="width:50%" /> Изображение 3</label></p>
	<p><label><input type="text" name="extra[image4]" value="<?php echo get_post_meta($post->ID, 'image4', 1); ?>" style="width:50%" /> Изображение 4</label></p>

	<p>Описание статьи (description):
		<textarea type="text" name="extra[description]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
	</p>
	
	<p>О товаре</p>
	<p><label><input type="text" name="extra[tovar1]" value="<?php echo get_post_meta($post->ID, 'tovar1', 1); ?>" style="width:50%" /> Хлопок 96%</label></p>
	<p><label><input type="text" name="extra[tovar2]" value="<?php echo get_post_meta($post->ID, 'tovar2', 1); ?>" style="width:50%" /> Лайкра 5%</label></p>
	<p><label><input type="text" name="extra[tovar3]" value="<?php echo get_post_meta($post->ID, 'tovar3', 1); ?>" style="width:50%" /> Плотность 180г/м2</label></p>
	<p><label><input type="text" name="extra[tovar4]" value="<?php echo get_post_meta($post->ID, 'tovar4', 1); ?>" style="width:50%" /> Приталенный фасон</label></p>
	<p><label><input type="text" name="extra[tovar5]" value="<?php echo get_post_meta($post->ID, 'tovar5', 1); ?>" style="width:50%" /> Шелкография</label></p>
	<p><label><input type="text" name="extra[tovar6]" value="<?php echo get_post_meta($post->ID, 'tovar6', 1); ?>" style="width:50%" /> Качественные швы</label></p>



	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	if ( ! wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // выходим если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // выходим если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false; // выходим если данных нет

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']); // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}



////////////////////////////


function true_load_lpestimate(){
	$likes = $_POST['likes'];
	$ip = $_SERVER['REMOTE_ADDR'];
	if($likes){
		$likesnum = get_post_meta($likes, 'likes', true);
		$likeip = get_post_meta($likes, 'ipuser', true);
		
		if($likeip == $ip) {
			echo '<div style="border-radius: 5px; padding: 10px; background: #f3f3f3; position: absolute; top: -10px; left: 70px; width: 130px;">Вы уже тыкали.</div>';
			die;
		}
		
		
		if($_COOKIE['likename_'.$likes] == 1) {
			if($likesnum) { 
				echo '+'.$likesnum; 
				echo $ip;
			} 
			else { 
				echo '0'; 
			}
		}
		
		
		else {
			$likesnumsum = ($likesnum + 1);
			update_post_meta($likes, 'likes', $likesnumsum);
			update_post_meta($likes, 'ipuser', $ip);
			
			echo '+'.$likesnumsum;
		}
	}

die();
}
add_action('wp_ajax_lpestimate', 'true_load_lpestimate');
add_action('wp_ajax_nopriv_lpestimate', 'true_load_lpestimate');


////////////////

function dateArticle($d) {
	$now = date('d.m.Y');
	$dataPost = date('d.m.Y', strtotime($d));
	
	$datetime1 = date_create($dataPost);
	$datetime2 = date_create($now);
	
	$interval = date_diff($datetime1, $datetime2);
	$sravnenie = $interval->format("%d");
							
	if($now == $dataPost) {
		return 'Сегодня';
	}
	
	elseif($sravnenie == '1') {
		return 'Вчера';
	}
	
	else {
		return $dataPost;
	}
}

//////////////////////////

function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Карта',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="chw-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Номер телефона',
		'id'            => 'number',
	) );
	
	register_sidebar( array(
		'name'          => 'Адрес',
		'id'            => 'adress',
	) );
	
	register_sidebar( array(
		'name'          => 'Номер телефона',
		'id'            => 'number',
	) );
	
	register_sidebar( array(
		'name'          => 'Режим работы',
		'id'            => 'mode',
	) );


}
add_action( 'widgets_init', 'wpb_widgets_init' );


////////////////////////////////



class WP_book_Widget extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'input',
                 'Поле для ввода',
                 array( 'description' => __( 'Поле для ввода', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) {
?>
           <p>
                 <label for="<?php echo $this->get_field_id( 'title' ); ?>">Текст</label>
                 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                  name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
                  value="<?php echo $instance['title']; ?>" />
           </p>
<?php
     }
     public function widget( $args, $instance ) {
?>
          <?php echo $instance[ 'title' ]; ?>
<?php
     }
}
add_action( 'widgets_init', function(){
     register_widget( 'WP_book_Widget' );
});










