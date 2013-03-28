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
                                    <i class="icon-calendar"></i> <?php the_date('Y-m-d');?> <i class="icon-user"></i> <?php the_author();?> <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#"><?php comments_number( '0 Comments', '1 Comment', '% Comments' );?></a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb2">
                                    <a href="#"><img src="img/photos/tn_1.jpg" alt=""></a>
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
                                    <a href="#"><i class="icon-facebook facebook"></i></a>
                                    <a href="#"><i class="icon-twitter twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin linkedin"></i></a>
                                    <a href="#"><i class="icon-pinterest pinterest"></i></a>
                                    <a href="#"><i class="icon-google-plus google-plus"></i></a>
                                 </div>
                              </div>     

                               <hr>

                               <!-- Comment section -->
                  
                              <?php comments_template();?> 
                              
                              <!-- Navigation -->
                              
                              <div class="navigation button">  
                                    <div class="pull-left"><a href="#">« Previous Post</a></div>
                                    <div class="pull-right"><a href="#">Next Post »</a></div>
                                    <div class="clearfix"></div>
                              </div>

                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="span4">
                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Search</h4>
                                 <form method="get" id="searchform" action="#" class="form-search">
                                    <input type="text" value="" name="s" id="s" class="input-medium">
                                    <button type="submit" class="btn">Search</button>
                                 </form>
                              </div>
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                 <ul>
                                    <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
                                    <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
                                    <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
                                    <li><a href="#">Vivamus scelerisque dui in massa</a></li>
                                    <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>About</h4>
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
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
