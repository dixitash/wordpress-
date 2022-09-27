<?php
	// Place this function into your functions.php theme file
	function pagination($pages = '', $range = 4) {
		$showitems = ($range * 2)+1; 
		global $paged; 
		if(empty($paged)) $paged = 1; 
		if($pages == '') { 
			global $wp_query; 
			$pages = $wp_query->max_num_pages; 
			if(!$pages) { 
				$pages = 1; 
			} 
		} 
		if(1 != $pages) { 
			echo "<div class=\"pagination\">"; 
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; Primera</a>";
			if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Anterior</a>"; 
			for ($i=1; $i <= $pages; $i++) { 
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) { 
					echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>"; 
				} 
			} 
			if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Siguiente &rsaquo;</a>"; 
			if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&Uacute;ltima &raquo;</a>"; echo "</div>\n"; 
		} 
	}


	// Place whatever you want to show the pagination
	$count_posts = wp_count_posts();
	$published_posts = $count_posts->publish;

	if( $published_posts > get_query_var( 'posts_per_page' ) ) {

		if ( function_exists( "pagination" ) ) { 
			pagination( $additional_loop->max_num_pages ); 
		}
	}

?>