
<?php

//[video_wrapper_start]
function video_wrapper_start_func( $atts ){
	return "<div class='videoWrapper'>";
}
add_shortcode( 'video_wrapper_start', 'video_wrapper_start_func' );


//[video_wrapper_end]
function video_wrapper_end_func( $atts ){
	return "</div>";
}
add_shortcode( 'video_wrapper_end', 'video_wrapper_end_func' );

?>

<!-- Reference Examples -->
<?php

	// Straight Up [straight-up]
	function straight_up_func( $atts ){
		return "foo and bar";
	}
	add_shortcode( 'straight-up', 'straight_up_func' );


	// Fill in the blanks [madlib foo="foo-value"]
	function madlib_func( $atts ) {
	    $a = shortcode_atts( array(
	        'foo' => 'something',
	        'bar' => 'something else',
	    ), $atts );

	    return "{$a['foo']}";
	}
	add_shortcode( 'madlib', 'madlib_func' );


	// Wraps content in the middle [wrapper]Content[/wrapper]
	function wrapper_func($atts, $content = null) {
		return '<span class="recap">'.$content.'</span>';
	}
	add_shortcode("wrapper", "wrapper_func");




		// Wraps content in the middle [videoWrapper]Content[/videoWrapper]
	function videoWrapper_func($atts, $content = null) {
		return '<div class="videoWrapper">'.$content.'</div>';
	}
	add_shortcode("videoWrapper", "videoWrapper_func");

?>
