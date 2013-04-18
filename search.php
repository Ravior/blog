<?php
/**
 * Thu Apr 18, 2013 09:42:31 added by Thanh Son 
 * Email: thanhson1085@gmail.com 
 */
get_header();
?>
<div class="content blog">
  <div class="container">

  <h2>Search</h2>
  <p class="big grey">Keyword: "<?php echo get_search_query(); ?>"</p>
  <hr>

  <div class="row">

                        <div class="span12">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->

								<?php
								if ( have_posts() ) :
								while ( have_posts() ) : the_post();
								?>

                              <div class="entry">
                                 <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> <?php the_date('Y-m-d');?> <i class="icon-user"></i> <?php the_author();?> <span class="pull-right"><i class="icon-comment"></i> <a href="#"><?php comments_number( '0 Comments', '1 Comment', '% Comments' );?></a></span>
                                 </div>
                                 
                                 <!-- Para -->
                                 <p>
									<?php the_content('', false);?>
								 </p>

                                 <!-- Read more -->
                                 <div class="button"><a href="<?php the_permalink()?>">Read More...</a></div>
                              </div>
								<?php
								endwhile;
								else:
									echo 'No post found!';
								endif;
								?>
                              
                              <!-- Pagination -->
                              <div class="paging">
								<?php
								$big = 999999999;
								$args = array(
									'base'         => '%_%',
									'format'       => '?page=%#%',
									'total'        => 1,
									'current'      => 0,
									'show_all'     => False,
									'end_size'     => 1,
									'mid_size'     => 2,
									'prev_next'    => True,
									'prev_text'    => __('« Previous'),
									'next_text'    => __('Next »'),
									'type'         => 'plain',
									'add_args'     => False,
									'add_fragment' => '',
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
								);
								echo paginate_links($args);

								?>
                              </div> 
                              
                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        
    </div>

 <div class="border"></div>

  </div>
</div>
<?php
get_footer();
