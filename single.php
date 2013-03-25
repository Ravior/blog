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
                                 <h2>Sed justo scelerisque ut consectetur</h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> 26-2-2012 <i class="icon-user"></i> Admin <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#">2 Comments</a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb2">
                                    <a href="#"><img src="img/photos/tn_1.jpg" alt=""></a>
                                 </div>
                                 
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>
                                 
                                 <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit odio, id hendrerit ipsum. Fusce consequat leo vitae velit interdum at laoreet justo ullamcorper.</p>                                 
                              </div>
                              
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
                  
                              <div class="comments">
                                 
                                    <div class="title"><h5>2 Comments</h5></div>
                                    
                                    <ul class="comment-list">
                                      <li class="comment">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="http://placekitten.com/64/64">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                      <li class="comment reply">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="http://placekitten.com/64/64">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                    </ul>
                              </div>
                              
                              <!-- Comment posting -->
                              
                              <div class="respond well">
                                 <div class="title"><h5>Post Reply</h5></div>
                                 
                                 <div class="form">
                                   <form class="form-horizontal">
                                       <div class="control-group">
                                         <label class="control-label" for="name">Name</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="name">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="email">Email</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="email">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="website">Website</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="website">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="comment">Comment</label>
                                         <div class="controls">
                                           <textarea class="input-xlarge" id="comment" rows="3"></textarea>
                                         </div>
                                       </div>
                                       <div class="form-actions">
                                         <button type="submit" class="btn">Submit</button>
                                         <button type="reset" class="btn">Reset</button>
                                       </div>
                                   </form>
                                 </div>
                              </div>
                              
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
