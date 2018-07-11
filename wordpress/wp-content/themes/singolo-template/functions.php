<?php 
	//Estilos 
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		// registrar estilos 
		wp_register_style('main', get_parent_theme_file_uri( '/css/main.css' ), mull, null);
		wp_register_style('nivo', get_parent_theme_file_uri( '/css/nivo-slider.css'), null, null);
		wp_register_style('nivotheme', get_parent_theme_file_uri( '/css/nivotheme.css' ), null, null);
		wp_register_style('pretty', get_parent_theme_file_uri( '/css/prettyPhoto.css' ), null, null);
		// wp_register_style('ie9', get_parent_theme_file_uri( '/css/ie9.css' ), null, null);
		

		// llamarlos
		wp_enqueue_style('main');
		wp_enqueue_style('nivo');
		wp_enqueue_style('nivotheme');
		wp_enqueue_style('pretty');
		// wp_enqueue_style('ie9');

	};

	add_action('wp_enqueue_scripts', 'dl_enqueue_style');
 
?>

<?php 
	function dl_enqueue_scripts(){
		$theme_data = wp_get_theme();

		wp_register_script( '172', get_parent_theme_file_uri( '/js/jquery-1.7.2.js' ),null,$theme_data->get('1.0'), true);
		wp_register_script( 'nivo_slider', get_parent_theme_file_uri( '/js/jquery.nivo.slider.pack.js' ), null, $theme_data->get('1.0'), true);
		wp_register_script( 'quicksand', get_parent_theme_file_uri( '/js/jquery.quicksand.js' ), null,$theme_data->get('1.0'), true);
		wp_register_script( 'pretty_photo', get_parent_theme_file_uri( '/js/jquery.prettyPhoto.js' ), null,$theme_data->get('1.0'), true);
		wp_register_script( 'easing', get_parent_theme_file_uri( '/js/jquery.easing.1.3.js' ),null,$theme_data->get('1.0'), true );
		wp_register_script( 'script1', get_parent_theme_file_uri( '/js/script.js' ),null,$theme_data->get('1.0'), true);
		wp_register_script( 'custom',get_parent_theme_file_uri( '/js/custom.js' ),null,$theme_data->get('1.0'), true );
		// wp_register_script( 'ie7', get_parent_theme_file_uri( '/js/lte-ie7.js' ),null,$theme_data->get('1.0'), true);

		wp_enqueue_script('172');
		wp_enqueue_script('nivo_slider');
		wp_enqueue_script('quicksand');
		wp_enqueue_script('pretty_photo');
		wp_enqueue_script('easing');
		wp_enqueue_script('script1');
		wp_enqueue_script('custom');
		// wp_enqueue_script('ie7');

	}
	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );


 ?>

 <!-- <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/custom.js"></script> -->
<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

 <?php 
 define("WP_DEBUG", true);
 define("WP_DEBUG_DISPLAY", true);
 define("WP_DEBUG_LOG", true);
 ?> 