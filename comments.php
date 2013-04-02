    

<?php if (post_password_required()) : ?>
<div class="comments">
    <p><?php _e( 'Post is password protected. Enter the password to view any comments.'); ?></p>
</div> <!-- END: comments if password protected -->

<?php return; endif; ?>

<?php if (have_comments()) : ?>
<div class="comments">
	<h5><?php comments_number( '0 Comments', '1 Comment', '% Comments' );?></h5>
	<ul class="comment-list">
        <?php wp_list_comments('type=comment&callback=custom_comments'); // Custom callback in functions.php ?>
	</ul>
</div>
<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
	'author' => '<div class="control-group"> <label class="control-label" for="name">' . __( 'Name' ) . '</label> <div class="controls"> <input type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" class="input-large" id="name"> </div> </div>',
	'email'  => '<div class="control-group"> <label class="control-label" for="email">' . __( 'Email' ) . '</label> <div class="controls"> <input type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" class="input-large" id="email"> </div> </div>',
);
$comment_field = '<div class="control-group"><label class="control-label" for="comment">' . _x( 'Comment', 'noun' ) . '</label><div class="controls"> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div></div>';
 
$comments_args = array(
    'fields' =>  $fields,
    'comment_field' =>  $comment_field,
	'comment_notes_before' => '',
	'comment_notes_after' => '',
    'title_reply'=>'',
    'label_submit' => 'Send'
);
 
?>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    
    <p><?php _e( 'Comments are closed here.'); ?></p>
<?php endif;?>
<div class="respond well">
 <div class="title"><h5>Post Reply</h5></div>
 
 <div class="form">
   <div class="form-horizontal">
<?php
comment_form($comments_args);
?>
   </div>
 </div>
</div>
<!-- Comment posting -->
