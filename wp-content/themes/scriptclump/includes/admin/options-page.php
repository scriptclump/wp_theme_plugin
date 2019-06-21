<?php
function scb_theme_opts_page(){
?>
<div class="wrap">
	<div class="panel panel_success">
		<div class="panel_heading">
			<h3 class="panel_title"><?php _e('Scriptclump Theme settings', 'scriptclump'); ?></h3>
		</div>
		<div class="panel_body">
			<form action="post" action="admin-post.php">
				<input type="hidden" name="action" value="scb_save_options">
				<?php wp_nonce_field('ju_options_verify'); ?>
				<h4><?php _e('Social Icons', 'scriptclump');?></h4>
				<div class="form-group">
					<label><?php _e('Twitter', 'scriptclump'); ?></label>
					<input type="text" class="form-control" name="scb_inputTwitter">
				</div>
				<div class="form-group">
					<label><?php _e('Facebook', 'scriptclump'); ?></label>
					<input type="text" class="form-control" name="scb_inputFacebook">
				</div>
				<div class="form-group">
					<label><?php _e('Youtube', 'scriptclump'); ?></label>
					<input type="text" class="form-control" name="scb_inputYoutube">
				</div>
				<h4><?php _e('Logo', 'scriptclump');?></h4>
				<div class="form-group">
					<label><?php _e('Logo Type', 'scriptclump'); ?></label>
					<select name="scb_inputLogoType" id="" class="form-control">
						<option value="1"><?php _e('Site Name', 'scriptclump') ?></option>
						<option value="2"><?php _e('Image', 'scriptclump') ?></option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Logo Image" name="scb_inputLogoImg">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button" id="ju_uploadLogoImgBtn"><?php _e('Upload', 'scriptclump') ?></button>
					</span>
				</div>
				<div class="form-group">
					<label><?php _e('Footer', 'scriptclump'); ?></label>
					<input type="text" class="form-control" name="scb_inputFooter">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit" id="ju_uploadLogoImgBtn"><?php _e('Submit', 'scriptclump') ?></button>
				</div>
			</form>
		</div>	
	</div>
</div>
<?php
}