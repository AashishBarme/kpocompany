<div class="card">
    <div class="card-header" id="heading-<?php the_ID(); ?>">
                                            <h5 class="mb-0">
                                                <i class="fa fa-angle-down"></i>
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>">
                                                        <?php the_title(); ?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse-<?php the_ID(); ?>" class="collapse" aria-labelledby="heading-<?php the_ID(); ?>" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <?php echo get_the_content(); ?>
                                            </div>
                                        </div>
</div>