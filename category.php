<?php
get_header();
?>
<div class="content blog">
  <div class="container">

  <h2><?php single_cat_title(); ?> </h2>
  <p class="big grey"><?php echo category_description(); ?></p>
  <hr>

  <div class="row">

                        <div class="span8">
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
                                    <i class="icon-calendar"></i> <?php the_date('Y-m-d');?> <i class="icon-user"></i> <?php the_author();?> <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#"><?php comments_number( '0 Comments', '1 Comment', '% Comments' );?></a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb">
									<?php 
									if ( has_post_thumbnail() ) {
									?>
									<a href="<?php the_permalink();?>">
									<?php
									  the_post_thumbnail(array(640,640));
									?>
									</a>
									<?php

									} 
									?>
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
                        <div class="span4">

                            <!-- Sidebar 1 -->

                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                 <ul>
									<?php
										$recent_posts = wp_get_recent_posts( $args );
										foreach( $recent_posts as $recent ){
											echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
										}
									?>
                                 </ul>
                              </div>
                           </div>                                                
                        </div>

                        
    </div>

 <div class="border"></div>

  </div>
</div>
<?php
get_footer();
