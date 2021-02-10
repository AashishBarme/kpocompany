<?php
$prev_post = get_previous_post();
$next_post = get_next_post(); 
?>
<div class="navigation-area">
                     <div class="row">

                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php if($prev_post): ?>
                           <div class="thumb">
                              <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                 <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($prev_post->ID); ?>" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                 <span class="lnr text-white fa fa-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                 <h4> <?php echo apply_filters( 'the_title', $prev_post->post_title ); ?></h4>
                              </a>
                           </div>
                        <?php endif; ?>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <?php if($next_post): ?>
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="<?php echo get_permalink($next_post->ID); ?>">
                                 <h4><?php echo apply_filters('the_title', $next_post->post_title); ?></h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="<?php echo get_permalink($next_post->ID); ?>">
                                 <span class="lnr text-white fa fa-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="<?php echo get_permalink($next_post->ID); ?>">
                                 <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($next_post->ID); ?>" alt="">
                              </a>
                           </div>
                        <?php endif; ?>
                        </div>
                     </div>
                  </div>