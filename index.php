<?php get_header();  ?>
<body>
<main>
    <div class="main-split">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
//                'date_query' => array(
//                        array(
//                            'column' => 'post_date',
//                            'after' => 'today',
//                            'inclusive' => true
//                        )
//                )
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();

        ?>
            <div class="card">
                <div class="card-body text-center">
                    <?php the_post_thumbnail('small_thumbnail'); ?>
                    <div class="card-title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        <br>
        <?php endwhile; ?>
    </div>
    <div class="text-center">
        <?php fauzan_pagination(); ?>
    </div>

<!--TYPE ONE CARD-->



<!--TYPE TWO CARD-->
<!--<div class="row">-->
<!--<div class="col">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h5>-->
<!--                <p class="card-text">--><?php //echo wp_trim_words( get_the_content(), 30, ' ...' ); ?><!--</p>-->
<!--                <a href="--><?php //the_permalink(); ?><!--" class="btn btn-primary">Read More</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h5>-->
<!--                <p class="card-text">--><?php //echo wp_trim_words( get_the_content(), 30, ' ...' ); ?><!--</p>-->
<!--                <a href="--><?php //the_permalink(); ?><!--" class="btn btn-primary">Read More</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<br>-->
<!--TYPE THREE CARD-->
<!--<div class="row row-cols-1 row-cols-md-3 g-4">-->
<!--    <div class="col">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h5>-->
<!--                <p class="card-text">--><?php //echo wp_trim_words( get_the_content(), 30, ' ...' ); ?><!--</p>-->
<!--                <a href="--><?php //the_permalink(); ?><!--" class="btn btn-primary">Read More</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--<div class="col">-->
<!--    <div class="card">-->
<!--        <div class="card-body">-->
<!--            <h5 class="card-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h5>-->
<!--            <p class="card-text">--><?php //echo wp_trim_words( get_the_content(), 30, ' ...' ); ?><!--</p>-->
<!--            <a href="--><?php //the_permalink(); ?><!--" class="btn btn-primary">Read More</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--    <div class="col">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h5>-->
<!--                <p class="card-text">--><?php //echo wp_trim_words( get_the_content(), 30, ' ...' ); ?><!--</p>-->
<!--                <a href="--><?php //the_permalink(); ?><!--" class="btn btn-primary">Read More</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<br>-->
<!--    <nav aria-label="...">-->
<!--        <ul class="pagination">-->
<!--            <li class="page-item disabled">-->
<!--                <a class="page-link">Previous</a>-->
<!--            </li>-->
<!--            <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--            <li class="page-item active" aria-current="page">-->
<!--                <a class="page-link" href="#">2</a>-->
<!--            </li>-->
<!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--            <li class="page-item">-->
<!--                <a class="page-link" href="#">Next</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </nav>-->


<br>
</main>

<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear">
    <?php get_footer(); ?>
</div>
</body>