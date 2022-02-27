<?php get_header();  ?>
<body>
<main>
    <div class="main-split">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 99,
            'cat' => '4'
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <?php endwhile; ?>
    </div>
    <div class="text-center">
        <?php fauzan_pagination(); ?>
    </div>


    <div class="text-center">
        <?php fauzan_pagination(); ?>
    </div>

    <div class="clear">
        <?php get_footer(); ?>
    </div>

</main>
</body>