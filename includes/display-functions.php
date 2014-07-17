<?php

/***** Display Functions *******/

function rpt_display_content ($content = ""){

	if(is_array($content)) {
		// If this is an array, this means it was sent via the shortcode, not the filter
		$echoThis = true;

		// Parse the content array here if you want to add options to the shortcode, then set content to a string so you can append the output to it.

		$content = "";
			} else {
		$echoThis = false;
			}

		global $rpt_options;

			if(is_single()){	

	ob_start();

	?>

	<div class="recent-popular-tags">
	<?php 
	$rpt_heading = $rpt_options['heading_tags'];
	if (!isset($rpt_heading)); { 
		echo '<h3>' . $rpt_heading . '</h3>'; 
	} ?>
	<?php
	$rpt_days = $rpt_options['number_days'];
	global $wpdb;
	$rpt_term_ids = $wpdb->get_col("
	SELECT term_id FROM $wpdb->term_taxonomy
	INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
	INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
	WHERE DATE_SUB(CURDATE(), INTERVAL $rpt_days DAY) <= $wpdb->posts.post_date");

	if(count($rpt_term_ids) > 0){

		$rpt_tags = get_tags(array(
		'orderby' => 'count',
		'order'   => 'DESC',
		'number'  => $rpt_options['number_tags'],
		'include' => $rpt_term_ids,
		 ));
	foreach ( (array) $rpt_tags as $rpt_tag ) {
	echo '<span class="rpt-link"><a href="' . get_tag_link ($rpt_tag->term_id) . '" rel="tag">' . $rpt_tag->name . '</a></span>';
	}
	}
	?>
	</div>	

	<?php

		$content .= ob_get_clean();
	}

	if($echoThis) {
		echo $content;
		
	return;
}

	return $content;
}

add_filter('the_content', 'rpt_display_content'); 

add_filter('widget_text', 'do_shortcode');

add_shortcode('recent-popular-tags', 'rpt_display_content');
?>
