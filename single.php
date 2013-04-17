<?php
/**
 * Mon Mar 25, 2013 17:19:41 added by Thanh Son 
 * Email: thanhson1085@gmail.com 
 */
get_header();
?>
<div class="content">
  <div class="container">

  <h2>Blog</h2>
  <p class="big grey">Something Goes Here.</p>
  <hr>

  <!-- Blog starts -->
            
            <div class="blog">
               <div class="row">
                  <div class="span12">
                     
                     <!-- Blog Posts -->
                     <div class="row">
                        <div class="span8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <div class="entry">
								<?php
								if ( have_posts() ) :
								while ( have_posts() ) : the_post();
								?>
                                 <h2><?php the_title();?></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> <?php the_date('Y-m-d');?> <i class="icon-user"></i> <?php the_author();?> <span class="pull-right"><i class="icon-comment"></i> <a href="#show-comment"><?php comments_number( '0 Comments', '1 Comment', '% Comments' );?></a></span>
                                 </div>
                                 

                                 <!-- Thumbnail -->
                                 <div class="bthumb2">
									<?php 
									if ( has_post_thumbnail() ) {
									?>
									<a href="<?php the_permalink();?>">
									<?php
									  the_post_thumbnail(array(180,180));
									?>
									</a>
									<?php

									} 
									?>
                                 </div>
								<?php the_content();?>
                                 
                              </div>
								<?php
								endwhile;
								else :
									echo wpautop( 'Sorry, no posts were found' );
								endif;
								?>
                              
                              <div class="post-foot well">
                                 <!-- Social media icons -->
                                 <div class="social">
                                    <h6>Sharing is Sexy: </h6>
									<a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&t=<?php echo urlencode($post->post_title); ?>"><i class="icon-facebook facebook"></i></a>
                                    <a href="https://www.linkedin.com/cws/share?url=<?php echo urlencode(get_permalink($post->ID));?>" target="_blank"><i class="icon-linkedin linkedin"></i></a>
                                    <a target="_blank" class="twitter shareLink" title="Tweet" href="http://twitter.com/intent/tweet?url=<?php urlencode(the_permalink()); ?>" data-tweet="<?php the_title(); ?>" data-hashtags="foo,bar" data-via="twitterUsername" ><i class="icon-twitter twitter"></i></a>
                                    <a target="_blank" class="pinterest shareLink" title="Pin It" href="http://pinterest.com/pin/create/button/?url=<?php urlencode(the_permalink()); ?>" data-media="<?php echo $image_url; ?>" data-description="<?php the_title(); ?> - <?php the_permalink(); ?>" ><i class="icon-pinterest pinterest"></i></a>
                                    <a target="_blank" class="googleplus shareLink" title="Google+" href="https://plus.google.com/share?url=<?php urlencode(the_permalink()); ?>" ><i class="icon-google-plus google-plus"></i></a>
                                 </div>
                              </div>     

                               <hr>

                               <!-- Comment section -->
								<a name="show-comment"></a>
                  
                              <?php comments_template();?> 
                              
                              <!-- Navigation -->
                              
                              <div class="navigation button">  
                                    <div class="pull-left"><?php previous_post_link('%link', '« Previous Post', TRUE, '13'); ?></div>
                                    <div class="pull-right"><?php next_post_link('%link', 'Next Post »', TRUE, '13'); ?></div>
                                    <div class="clearfix"></div>
                              </div>

                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="span4">
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
                     
                     
                     
                  </div>
               </div>
            </div>
 

 <div class="border"></div>


  </div>
</div>
<?php
get_footer();
