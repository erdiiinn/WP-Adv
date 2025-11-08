<div  class="container">
    <div class="post mb-5">
        <div class="media">
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo get_the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
            <div class="media-body">
                <h3 class="title mb-1">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="meta mb-1">
                    <span class="date">
                        <?php
                           echo get_the_date();
                           ?>
                    </span>
                
        </div>
    </div>
</div>