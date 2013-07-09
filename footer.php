</div><!-- /.container -->
</div><!-- /.wrapper -->
	<section id="breadcrumbs">
		<div class="container">
        	<?php social_media_html(); ?>
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			} ?>
		</div><!-- /.container -->
	</section><!-- /.breadcrumbs -->
	<footer class="footer">
		<div class="container">
        
        <div class="row">
        <div class="span4">
        &copy;<?php echo date(Y); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </div><!-- /.span4 -->
        <div class="span4 offset4">
        	<a href="http://www.impactmt.com" class="nolink" >Website Design</a>ed by <a href="http://www.impactmt.com" title="Impact Marketing & Technology"><i id="tip" class="icon-Impact icon-2x" data-toggle="tooltip" title="Website Developed by Impact Marketing & Technology"></i>Impact Marketing & Technology</a> 
		
        <!--<i class="icon-Wordpress-Converted technology-icons icon-2x" title="Website Developed w/ Wordpress"></i>--> 
        <i class="icon-logo-css3-vector technology-icons icon-3x tip" title="Website Developed w/ CSS3"></i>
        <i class="icon-HTML5-Logo-Badge technology-icons icon-3x tip" title="Website Developed w/ HTML5"></i>
        <!--<i class="icon-html5_semantics data-toggle="tooltip" technology-icons icon-3x" title="Website Developed w/ HTML5 Semantics"></i> -->
        <!--<i class="icon-html5_perfintegration data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 PerfIntegration"></i>-->
        <!--<i class="icon-html5_offline_storage data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 Offline Storage"></i>-->
        <!--<i class="icon-html5_multimedia data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 Multimedia"></i>-->
        <!--<i class="icon-html5_device_access data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 Device Access"></i>-->
        <!--<i class="icon-html5_css3_styling data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 CSS3 Styling"></i>-->
        <!--<i class="icon-html5_connectivity data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 Connectivity"></i>-->
        <!--<i class="icon-html5_3d_effects data-toggle="tooltip" technology-icons icon-2x" title="Website Developed w/ HTML5 3D Effects"></i>-->
        </div><!-- /.container -->
        </div><!-- /.row -->
        
	
		</div><!-- /.span3 offset2 -->
	</footer><!-- /.footer -->
    
    
    <?php 
	$analcode = get_option('anal_code');
	if($analcode !== '') { ?>
	    
    <!--Google Analytics-->
    <script type="text/javascript">
	  
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo $analcode;?>']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	<?php } ?>
    
    
<?php wp_footer(); ?>
</body>
</html>