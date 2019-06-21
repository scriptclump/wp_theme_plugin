<div class="comment-wrap">
	<?php foreach ($comments as $comment) { ?>
	<h4><a href="<?php comment_author_url(); ?>"> <?php comment_author(); ?></a> - <small><?php comment_date(); ?></small></h4>	
	<div class="comment-body">
		<?php comment_text();?>
	</div>
	<?php } ?>	
</div>
<?php
if( comments_open() ){
?>
	<form action="<?php echo site_url('wp-comments-post.php'); ?>" id="commentform" method="post">
		<input type="hidden" name="comment_post_ID" id="comment_post_ID" value="<?php echo $post->ID; ?>">
		<h4>Leave a comment</h4>
		<div class="form-group">
			<lable>Name / Alias (required)</lable>
			<input type="text" name="author" class="form-control">
		</div>
		<div class="form-group">
			<lable>Email (required, Not Shown)</lable>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<lable>Website (optional)</lable>
			<input type="text" name="url" class="form-control">
		</div>
		<div class="form-group">
			<lable>Comment</lable>
			<textarea name="comment" cols="60" rows="7" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Comment</button>
		</div>
	</form>
<?php
} else{
	_e('Comments are closed', 'scriptclump');
}