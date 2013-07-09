<?php

// Add Social Media Administration Page
function social_media_menu() {
	add_submenu_page('index.php', 'Social Media', 'Social Media', 'manage_options', 'social-submenu-page', 'social_media');
}
add_action('admin_menu', 'social_media_menu');


function social_media() {
		
	echo '<div class="wrap"><div id="icon-social" class="icon32"></div><h2>';
	echo bloginfo('sitename');
	echo ' Social Media</h2>'; ?>
        <form method="post" action="options.php">  
            <?php wp_nonce_field('update-options') ?>  
            
            <table class="form-table social-table">
            <tr valign="top">
                <th scope="row">
                    <i class="icon-rss icon-3x"></i><label for="rssid">RSS Feed<br/><a href="https://twitter.com/" target="_blank">Visit Feed</a></label>
                </th>
                <td>
                	<div class="input-prepend input-append">
                    <span class="add-on">http://</span>
                    <?php 
					// $site_url = site_url(); // e.g. http://www.example.com
					$to_remove = array( 'http://', 'https://' );
					foreach ( $to_remove as $item ) {
						$site_url = str_replace($item, '', $site_url); // to: www.example.com
					} ?>
                    <input type="text" name="rssid" id="rssid" size="45" value="<?php echo get_option('rssid'); ?>" />
                    <span class="add-on">/feed/rss2/</span>
                    <p class="description">RSS feeds benefit publishers by letting them syndicate content automatically.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-twitter icon-3x"></i><label for="twitterid">Twitter Handle<br/><a href="https://twitter.com/" target="_blank">Visit Twitter</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">@</span>
                    <input type="text" name="twitterid" id="twitterid" size="45" value="<?php echo get_option('twitterid'); ?>" />
                    <p class="description">Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-facebook icon-3x"></i><label for="fb_link">Facebook<br/><a href="http://www.facebook.com/" target="_blank">Visit Facebook</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="fb_link" id="fb_link" size="45" value="<?php echo get_option('fb_link'); ?>" />  
                    <p class="description">Facebook is a social utility that connects people with friends and others who work, study and live around them.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-google-plus icon-3x"></i><label for="gplus_link">Google +<br/><a href="https://plus.google.com/" target="_blank">Visit Google +</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="gplus_link" id="gplus_link" size="45" value="<?php echo get_option('gplus_link'); ?>" />  
                    <p class="description">Google+ aims to make sharing on the web more like sharing in real life.</p>
                    </div>
                </td>
            </tr>
             <tr valign="top">
                <th scope="row">
                    <i class="icon-instagram icon-3x"></i><label for="instagram_link">Instagram<br/><a href="http://instagram.com/" target="_blank">Visit Instagram</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="instagram_link" id="instagram_link" size="45" value="<?php echo get_option('instagram_link'); ?>" />  
                    <p class="description">Meet Instagram. It's a fast, beautiful and fun way to share your photos with friends and family.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-youtube icon-3x"></i><label for="youtube_link">YouTube<br/><a href="http://www.youtube.com" target="_blank">YouTube</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="youtube_link" id="youtube_link" size="45" value="<?php echo get_option('youtube_link'); ?>" />  
                    <p class="description">Hosts user-generated videos. Includes network and professional content.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-vimeo2 icon-3x"></i><label for="vimeo_link">Vimeo<br/><a href="http://vimeo.com/" target="_blank">Visit Vimeo</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="vimeo_link" id="vimeo_link" size="45" value="<?php echo get_option('vimeo_link'); ?>" />  
                    <p class="description">Vimeo is the home for high-quality videos and the people who love them.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-lanyrd icon-3x"></i><label for="lanyrd_link">Lanyrd<br/><a href="http://lanyrd.com/" target="_blank">Visit Lanyrd</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="lanyrd_link" id="lanyrd_link" size="45" value="<?php echo get_option('lanyrd_link'); ?>" />  
                    <p class="description">See events your contacts are going to, build your own speaker profile and catch up on conference videos and slides.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-flickr icon-3x"></i><label for="flickr_link">Flickr<br/><a href="http://www.flickr.com/" target="_blank">Visit Flickr</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="flickr_link" id="flickr_link" size="45" value="<?php echo get_option('flickr_link'); ?>" />  
                    <p class="description">Flickr is almost certainly the best online photo management and sharing application in the world.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-picassa icon-3x"></i><label for="picassa_link">Picassa<br/><a href="http://picasa.google.com/" target="_blank">Visit Picassa</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="picassa_link" id="picassa_link" size="45" value="<?php echo get_option('picassa_link'); ?>" />  
                    <p class="description">Picasa is an image organizer and image viewer for organizing, sharing and editing digital photos.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-blogger icon-3x"></i><label for="blogger_link">Blogger<br/><a href="https://accounts.google.com/ServiceLogin?service=blogger&ltmpl=start&hl=en&passive=86400&continue=http://www.blogger.com/home#s01" target="_blank">Visit Blogger</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="blogger_link" id="blogger_link" size="45" value="<?php echo get_option('blogger_link'); ?>" />  
                    <p class="description">Free weblog publishing tool from Google, for sharing text, photos and video.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-tumblr icon-3x"></i><label for="tumblr_link">Tumblr<br/><a href="http://www.tumblr.com/" target="_blank">Visit Tumblr</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="tumblr_link" id="tumblr_link" size="45" value="<?php echo get_option('tumblr_link'); ?>" />  
                    <p class="description">A feature rich microblogging platform and social networking website.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-linkedin icon-3x"></i><label for="linkedin_link">LinkedIn<br/><a href="http://www.linkedin.com/" target="_blank">Visit LinkedIn</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="linkedin_link" id="linkedin_link" size="45" value="<?php echo get_option('linkedin_link'); ?>" />  
                    <p class="description">Manage your professional identity. Build and engage with your professional network. Access knowledge, insights and opportunities.</p>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">
                    <i class="icon-foursquare icon-3x"></i><label for="linkedin_link">foursquare<br/><a href="https://foursquare.com/" target="_blank">Visit foursquare</a></label>
                </th>
                <td>
                	<div class="input-prepend">
                    <span class="add-on">http://</span>
                    <input type="text" name="foursquare_link" id="foursquare_link" size="45" value="<?php echo get_option('foursquare_link'); ?>" />  
                   <p class="description">Foursquare helps you and your friends find great places and make the most of your visits and connects people to businesses.</p>
                    </div>
                </td>
            </tr>
            </table>
            
            <p class="submit"><input id="submit" class="button button-primary" type="submit" value="Save Changes" name="submit"></p>

            <input type="hidden" name="action" value="update" />  
            <input type="hidden" name="page_options" value="foursquare_link,rssid,twitterid,fb_link,gplus_link,instagram_link,vimeo_link,youtube_link,lanyrd_link,flickr_link,picassa_link,dribbble_link,blogger_link,tumblr_link,linkedin_link,stumbleupon_link" />  
        </form> 
	<?php echo '</div>';
}


?>