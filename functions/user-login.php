<?php

function user_login_html() {
	$is_register = get_option('users_can_register', true);
	
	if (is_user_logged_in())
	{ ?> <a href="<?php echo wp_logout_url( home_url() ); ?>"class="btn-mini btn-login logged-in"><i class="icon-lock"></i> LOGOUT </a> 	<?php }
	else
	{ ?> 
        
    <a href="#login_panel" data-rel="prettyPhoto[login_panel]" class="btn-mini btn-login logged-out"><i class="icon-lock"></i> LOGIN</a> 
	
	<div class="login_register_stuff hide"><!-- Login/Register Modal forms - hide by default to be opened through modal -->
		<div id="login_panel" class="modal">
			<div class="inner-container login-panel">
				<h3 class="m_title">SIGN INTO YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES</h3>
                <form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form" id="login_form">
					<?php
					if ($is_register)  { ?>
                    <a href="#" class="btn btn-danger" onClick="ppOpen('#register_panel', '570');">CREATE ACCOUNT</a>					
                    <?php }
                    ?>
                    <input type="text" name="log" placeholder="Username" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="10" id="user_login" tabindex="11" />
                    <input type="password" name="pwd" placeholder="Password"  value="" size="10" id="user_pass" tabindex="12" />
                    <?php do_action('login_form'); ?>
                    <input type="submit" name="user-submit" value="<?php _e('LOGIN'); ?>" tabindex="14" class="btn btn-success" />
                    <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>" />
                    <input type="hidden" name="user-cookie" value="1" />
                </form>
                
				<div class="links modal-footer"><i class="icon-user"></i> <a href="#" onClick="ppOpen('#forgot_panel', '460');">FORGOT YOUR USERNAME?</a> / <i class="icon-lock"></i> <a href="#" onClick="ppOpen('#forgot_panel', '460');">FORGOT YOUR PASSWORD?</a></div>
			</div>
		</div><!-- end login panel -->

		<div id="register_panel">
			<div class="inner-container register-panel">
				<h3 class="m_title">CREATE ACCOUNT</h3>
                <p>&nbsp;</p> <!-- Gravity Form with New User Approve Plugin Setup -->
				<div class="links modal-footer"><i class="icon-lightbulb"></i> <a href="#" onClick="ppOpen('#login_panel', '715');">AAH, WAIT, I'VE DONE THIS ALREADY!</a></div>
			</div>
		</div><!-- end register panel -->
		<div id="forgot_panel">
			<div class="inner-container forgot-panel">
				<h3 class="m_title">ENTER YOUR USERNAME OR EMAIL ADDRESS</h3>
                
                <form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
                    <label for="user_login" class="hide">
                      <?php _e('Username or Email'); ?>
                      : </label>
                    <input type="text" name="user_login" placeholder="Username or Email Address" value="" size="20" id="user_login" tabindex="1001" />
                    <?php do_action('login_form', 'resetpass'); ?>
                    <input type="submit" name="user-submit" id="recover" value="<?php _e('SEND MY DETAILS!'); ?>" class="btn btn-warning" tabindex="1002" />
                    <?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
                    <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>" />
                    <input type="hidden" name="user-cookie" value="1" />
                </form>

				<div class="links modal-footer"><i class="icon-lightbulb"></i> <a href="#" onClick="ppOpen('#login_panel', '715');">AAH, WAIT, I REMEMBER NOW!</a></div>
			</div>
		</div><!-- end register panel -->
	</div><!-- end login register stuff -->

	<?php }
	
}

?>