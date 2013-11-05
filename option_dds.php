<?php

function author_box_menu() {
	$page = add_submenu_page( 'options-general.php', 'Author Box Options', 'Author Box', 'manage_options', 'author-box-dds-plugin', 'author_box_options' );
}
	
function author_box_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	if ($_POST['action'] == 'update') {
		$_POST['show_pages'] == 'on' ? update_option('bio_on_page', 'checked') : update_option('bio_on_page', '');
		$_POST['show_posts'] == 'on' ? update_option('bio_on_post', 'checked') : update_option('bio_on_post', '');
		$_POST['show_top'] == 'on' ? update_option('bio_on_top', 'checked') : update_option('bio_on_top', '');
		$_POST['show_twitter'] == 'on' ? update_option('twitter_on_profile', 'checked') : update_option('twitter_on_profile', '');
		$_POST['show_facebook'] == 'on' ? update_option('facebook_on_profile', 'checked') : update_option('facebook_on_profile', '');
		$_POST['show_gplus'] == 'on' ? update_option('gplus_on_profile', 'checked') : update_option('gplus_on_profile', '');
		$_POST['show_linkedin'] == 'on' ? update_option('linkedin_on_profile', 'checked') : update_option('linkedin_on_profile', '');
		$_POST['show_youtube'] == 'on' ? update_option('youtube_on_profile', 'checked') : update_option('youtube_on_profile', '');
		$_POST['show_pinterest'] == 'on' ? update_option('pinterest_on_profile', 'checked') : update_option('pinterest_on_profile', '');
		$_POST['show_messanger'] == 'on' ? update_option('messanger_on_profile', 'checked') : update_option('messanger_on_profile', '');
		$_POST['show_css'] == 'on' ? update_option('css_on_profile', 'checked') : update_option('css_on_profile', '');
		$_POST['show_images'] == 'on' ? update_option('images_on_profile', 'checked') : update_option('images_on_profile', '');
		$_POST['show_email'] == 'on' ? update_option('email_on_profile', 'checked') : update_option('email_on_profile', '');
		$message = '<div id="message" class="updated fade"><p><strong>Options Saved</strong></p></div>';
	}
	?>
	<div class="wrap">
	<h2>Author Box Plugin With Different Description</h2>
	<div class="metabox-holder columns-2">	
	<div id="postbox-container-1" class="postbox-container" style="width:65%; padding:1.0em;">
	<div class="meta-box-sortables ui-sortable">
	<div id="optionboxdesc" class="postbox">
		<h3 class="hndle"><span><b><u>Settings:</u></b></span></h3>
		<div class="inside">
			This plugin will add an author box to your single post and pages. The box will show user description from the user profile. It also give you an option to add an custom field (author_desc) with the author description to post or page, if you want to use different author description.
			<p>You can add a custom field (author_desc) to your post and your author box for that post will show the custom description, otherwise a description from user profile will be used.</p>
			<p><b>Plugin By <a href="http://makewebworld.com/about/">Sanjeev Mohindra</a></b></p><hr>
		<?php
		echo $message;
		$options['page'] = get_option('bio_on_page');
		$options['post'] = get_option('bio_on_post');
		$options['posttop'] = get_option('bio_on_top');
		$options['twitter'] = get_option('twitter_on_profile');
		$options['facebook'] = get_option('facebook_on_profile');
		$options['gplus'] = get_option('gplus_on_profile');
		$options['linkedin'] = get_option('linkedin_on_profile');
		$options['youtube'] = get_option('youtube_on_profile');
		$options['pinterest'] = get_option('pinterest_on_profile');
		$options['messanger'] = get_option('messanger_on_profile');
		$options['css'] = get_option('css_on_profile');
		$options['images'] = get_option('images_on_profile');
		$options['profileemail'] = get_option('email_on_profile');		?>
		<form method="post" action="">
			<input type="hidden" name="action" value="update" />
			<p><b>1. Where to display Author Box with Different Description</b></p>
			<?php
			echo '<input name="show_pages" type="checkbox" id="show_pages" '.$options['page'].' /> Display Author box on Pages<br />
			<input name="show_posts" type="checkbox" id="show_posts" '.$options['post'].' /> Display Author box on Posts<br />
			<p><b>2. Author Box location on the pages</b></p>
			<input name="show_top" type="checkbox" id="show_top" '.$options['posttop'].' /> Display Author box at Top of the Posts<br />
			<p><b>3. Add and Remove Contact Fields to User profile</b></p>
			<input name="show_messanger" type="checkbox" id="show_messanger" '.$options['messanger'].' /> Remove AOL, Yahoo and Google Messanger<br />
			<input name="show_twitter" type="checkbox" id="show_twitter" '.$options['twitter'].' /> Add Twitter<br />
			<input name="show_facebook" type="checkbox" id="show_facebook" '.$options['facebook'].' /> Add Facebook<br />
			<input name="show_gplus" type="checkbox" id="show_gplus" '.$options['gplus'].' /> Add Google Plus<br />
			<input name="show_linkedin" type="checkbox" id="show_linkedin" '.$options['linkedin'].' /> Add Linkedin<br />
			<input name="show_youtube" type="checkbox" id="show_youtube" '.$options['youtube'].' /> Add Youtube<br />
			<input name="show_pinterest" type="checkbox" id="show_pinterest" '.$options['pinterest'].' /> Add Pinterest<br />
			<p><b>4. Social Media Profiles</b></p>
			<input name="show_images" type="checkbox" id="show_images" '.$options['images'].' /> Show images rather than text for Social Media Profiles<br />
			<input name="show_email" type="checkbox" id="show_email" '.$options['profileemail'].' /> Do not Show Authors Email on Social Media Profiles<br />
			<p><b>4. CSS for Author Box Display</b></p>
			<input name="show_css" type="checkbox" id="show_css" '.$options['css'].' /> Do Not Load the CSS for Author Box Display.<p>If you check this option, Author Box CSS will not be loaded and you need to define your own CSS for the Author Box. This is to give you flexibility to choose your own Author Box Style.</p>
			' ?>
			<br />
			<input type="submit" class="button-primary" value="Save Changes" />
			</form>
		</div>
	</div>
	<div id="faqbox" class="postbox">
		<h3 class="hndle"><span><b><u>F.A.Q.:</u></b></span></h3>
		<div class="inside">
			<p><b>1. I am not seeing any custom field after installing the plugin?</b> <br />
			<b>Ans.</b> You will not be seeing it first time. Go ahead and enter it manually in your custom field box. You should give a name as author_desc and enter the description of the author. Next time onwards you can just select this field from the custom field dropdown menu.</p>
			<p><b>2. If I decide to uninstall the plugin, will I lose my custom author description?</b><br />
			<b>Ans.</b> Custom Author Description is saved in post meta and if you decide to uninstall the plugin because of any reason, you will not lose your custom description. If you reinstall it again, it will start fatching the custom Description for you.</p>
			<p><b>3. Do I need to donate to use this plugin?</b><br />
			<b>Ans.</b> No, The plugin is free and you can use it on any site you want. If you really like the plugin and want to help development then you are more than welcome to donate.
			<p><b>4. Which Option to select if I want to show Author Box at bottom of the post?</b><br />
			<b>Ans.</b> By default Author box will be shown at the bottom of the post. If you have selected to show the author box than it will come at the bottom of the post. If you want to show it on top of the post than check the option in the settings and it will be moved to the top.
			<p><b>5. How to create your own CSS?</b><br />
			<b>Ans.</b> You can select an option to not load the Author Box CSS. If you do that you need to define your ouw CSS to display the author box correctly. Author box uses author_info, author_photo and author_email CSS tags, you can define it in a way you want.
		</div>
	</div>
	</div>
	</div>
	<div id="postbox-container-2" class="postbox-container" style="width:25%; padding:1.0em;">
	<div class="meta-box-sortables ui-sortable">
	<div id="likebox" class="postbox">
		<h3 class="hndle"><span><b><u>Like the Plugin</u></b></span></h3>
		<div class="inside">
		<p><div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=206579272749132";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="http://www.facebook.com/MakeWebWorld" data-send="false" data-width="200" data-show-faces="true"></div></p> 
		<p><a href="https://twitter.com/makewebworld" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @makewebworld</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p> 
		<p><a href="http://wordpress.org/extend/plugins/author-box-with-different-description/" title="Author Box Plugin with Different Description" target="_blank">Give rating on Wordpress.org</a></p> 
	</div>
	</div>
	<div id="supportbox" class="postbox">
		<h3 class="hndle"><span><b><u>Plugin Support:</u></b></span></h3>
		<div class="inside">
			<p><a href="http://makewebworld.com/author-box-wordpress-plugin/" target="_blank">Request New Features</a></p> 
		</div>
	</div>
	<div id="rssbox" class="postbox">
		<h3 class="hndle"><span><b><u>Latest Articles:</u></b></span></h3>
		<div class="inside">
			<?php load_makewebworld_rss(); ?>
		</div>
		</div>
	</div>
	</div>
	</div>
	</div>
<?php
}
?>