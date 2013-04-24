<?php
/**
* Fri Mar 22, 2013 14:52:51 added by Thanh Son 
* Email: thanhson1085@gmail.com 
*/
define('THEMEWIDGET', TEMPLATEPATH . '/widgets');
require_once(THEMEWIDGET . '/col1.php');
require_once(THEMEWIDGET . '/col2.php');

add_theme_support( 'post-thumbnails' );  
set_post_thumbnail_size( 180, 180, true );  
if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'sonnst'),
        'description' => __('nothing to desc', 'sonnst'),
        'id' => 'footer-widget-area',
        'before_widget' => '<div class="span4"><div class="fwidget">',
        'after_widget' => '</div></div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ));
}
function custom_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
   
    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
	  <li <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?>>
		<a class="pull-left" href="#">
    	  <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['64'] ); ?>
		</a>
		  <div class="comment-author">
    		<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
		  <div class="cmeta">
		  <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		  ?>
		  </div>
		  <p>
    		<?php comment_text() ?>
		  </p>
		  <div class="reply-link">
		  	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		  </div>
		  <div class="clearfix"></div>
	  </li>
<?php
}
