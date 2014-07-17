<?php





/***** Script Control *******/





function rpt_load_scripts() {


	if(is_single()){


		wp_enqueue_style('rpt-styles', plugin_dir_url(__FILE__) . 'css/plugin_styles.css');


	}


}


add_action('wp_enqueue_scripts', 'rpt_load_scripts');
?>
