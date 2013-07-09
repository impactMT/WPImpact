<?php
// Social Media - outputs list from Social Media settings
add_shortcode("social_media", "social_media_shortcode");

// -- HTML Function for Function Output
function social_media_html() { 
	global $post;
	
	if (get_option( 'rssid' ) || get_option( 'twitterid' ) || get_option( 'fb_link' ) || get_option( 'gplus_link' ) || get_option( 'instagram_link' ) || get_option( 'youtube_link' ) || get_option( 'vimeo_link' ) || get_option( 'lanyrd_link' ) || get_option( 'flickr_link' ) || get_option( 'picassa_link' ) || get_option( 'blogger_link' ) || get_option( 'tumblr_link' ) || get_option( 'linkedin_link' ) || get_option( 'foursquare_link' )) {
		
		echo '<ul id="social-media-html">';
			
		if (get_option( 'rssid' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'rssid', true );
				echo '/feed/rss2/" title="RSS Feed"><i class="icon-rss"></i></a></li>';
			}
		if (get_option( 'twitterid' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'twitterid', true );
				echo '" title="Twitter"><i class="icon-twitter"></i></a></li>';
			}
		if (get_option( 'fb_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'fb_link' );
				echo '" title="Facebook"><i class="icon-facebook"></i></a></li>';
			}
		if (get_option( 'gplus_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'gplus_link' );
				echo '" title="Google +"><i class="icon-google-plus"></i></a></li>';
			}
		if (get_option( 'instagram_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'instagram_link' );
				echo '" title="Instagram"><i class="icon-instagram"></i></a></li>';
			}
		if (get_option( 'youtube_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'youtube_link' );
				echo '" title="YouTube"><i class="icon-youtube"></i></a></li>';
			}
		if (get_option( 'vimeo_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'vimeo_link' );
				echo '" title="Vimeo"><i class="icon-vimeo2"></i></a></li>';
			}
		if (get_option( 'lanyrd_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'lanyrd_link' );
				echo '" title="Lanyrd"><i class="icon-lanyrd"></i></a></li>';
			}
		if (get_option( 'flickr_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'flickr_link' );
				echo '" title="Flickr"><i class="icon-flickr"></i></a></li>';
			}
		if (get_option( 'picassa_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'picassa_link' );
				echo '" title="Picassa"><i class="icon-picassa"></i></a></li>';
			}
		if (get_option( 'blogger_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'blogger_link' );
				echo '" title="Blogger"><i class="icon-blogger"></i></a></li>';
			}
		if (get_option( 'tumblr_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'tumblr_link' );
				echo '" title="Tumblr"><i class="icon-tumblr"></i></a></li>';
			}
		if (get_option( 'linkedin_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'linkedin_link' );
				echo '" title="LinkedIn"><i class="icon-linkedin"></i></a></li>';
			}
		if (get_option( 'foursquare_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'foursquare_link' );
				echo '" title="foursquare"><i class="icon-foursquare"></i></a></li>';
			}
		echo '</ul>';
				
	}

}

// -- HTML Function for Shortcode
function social_media_shortcode() { 
	ob_start();
	global $post;
	
	if (get_option( 'rssid' ) || get_option( 'twitterid' ) || get_option( 'fb_link' ) || get_option( 'gplus_link' ) || get_option( 'instagram_link' ) || get_option( 'youtube_link' ) || get_option( 'vimeo_link' ) || get_option( 'lanyrd_link' ) || get_option( 'flickr_link' ) || get_option( 'picassa_link' ) || get_option( 'blogger_link' ) || get_option( 'tumblr_link' ) || get_option( 'linkedin_link' ) || get_option( 'foursquare_link' )) {
		
		echo '<ul id="social-media-html">';
		
		if (get_option( 'rssid' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'rssid', true );
				echo '" title="RSS Feed"><i class="icon-rss"></i></a></li>';
			}	
		if (get_option( 'twitterid' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'twitterid', true );
				echo '" title="Twitter"><i class="icon-twitter"></i></a></li>';
			}
		if (get_option( 'fb_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'fb_link' );
				echo '" title="Facebook"><i class="icon-facebook"></i></a></li>';
			}
		if (get_option( 'gplus_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'gplus_link' );
				echo '" title="Google +"><i class="icon-google-plus"></i></a></li>';
			}
		if (get_option( 'instagram_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'instagram_link' );
				echo '" title="Instagram"><i class="icon-instagram"></i></a></li>';
			}
		if (get_option( 'youtube_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'youtube_link' );
				echo '" title="YouTube"><i class="icon-youtube"></i></a></li>';
			}
		if (get_option( 'vimeo_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'vimeo_link' );
				echo '" title="Vimeo"><i class="icon-vimeo2"></i></a></li>';
			}
		if (get_option( 'lanyrd_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'lanyrd_link' );
				echo '" title="Lanyrd"><i class="icon-lanyrd"></i></a></li>';
			}
		if (get_option( 'flickr_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'flickr_link' );
				echo '" title="Flickr"><i class="icon-flickr"></i></a></li>';
			}
		if (get_option( 'picassa_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'picassa_link' );
				echo '" title="Picassa"><i class="icon-picassa"></i></a></li>';
			}
		if (get_option( 'blogger_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'blogger_link' );
				echo '" title="Blogger"><i class="icon-blogger"></i></a></li>';
			}
		if (get_option( 'tumblr_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'tumblr_link' );
				echo '" title="Tumblr"><i class="icon-tumblr"></i></a></li>';
			}
		if (get_option( 'linkedin_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'linkedin_link' );
				echo '" title="LinkedIn"><i class="icon-linkedin"></i></a></li>';
			}
		if (get_option( 'foursquare_link' )) {
				echo '<li><a target="_blank" class="tip" href="http://';
				echo get_option( 'foursquare_link' );
				echo '" title="foursquare"><i class="icon-foursquare"></i></a></li>';
			}	
		echo '</ul>';
		
		$html = ob_get_contents();
		ob_end_clean();
	
		return $html;
		
	}

}


// Carousel - Outputs Carousel from Page Attachments
add_shortcode("carousel", "carousel_shortcode");

// -- HTML Function for Carousel from Page Attachments Shortcode
function carousel_shortcode() { 
	ob_start();
	global $post;
	

		$args = array(
			'post_type' => 'attachment',
			'posts_per_page' => '-1',
			'numberposts' => null,
			'exclude' => get_post_thumbnail_id(),
			'post_status' => null,
			'post_parent' => $post->ID
		); 
		
		echo '<div id="myCarousel" class="carousel slide">';
		
		
		echo '<div class="carousel-inner">';
		$attachments = get_posts($args);
		if ($attachments) {
			$count = 0;
			foreach ($attachments as $attachment) {
				echo '<div class="item';
				if($counter==0) { 
					echo ' active'; $counter++; 
					}
				echo '">';
				echo '<img src="';
				echo wp_get_attachment_url($attachment->ID);
				echo '" />';
				echo '<div class="carousel-caption">';
				echo '<h4>';
				echo ($attachment->post_title);
				echo '</h4>';
				echo '<p>';
				echo ($attachment->post_excerpt);
				echo '</p>';
				echo '</div>';
				echo '</div>';
			}
		echo '</div>';
		echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
        echo '<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';
		
		
		echo '<ol class="carousel-indicators">';
		$attachments = get_posts($args);
		if ($attachments) {
				$count = 0;
				foreach ($attachments as $attachment) {
				echo '<li data-target="#myCarousel" data-slide-to="';
				echo $count++;
				echo '" class="';
				if($counter==0) { 
					echo 'active'; $counter++; 
				}
				echo '"></li>';
			}
		}
		echo '</ol>';

		echo '</div>';
		}
		
		
		$html = ob_get_contents();
		ob_end_clean();
	
		return $html;

}


?>