<?php get_header(); ?>

<div class="thumb">
<img class="thumb__img" src="<?php echo INTERNO_IMG_DIR ?>/bg-blog.jpg" alt="">
<div class="thumb__info">
<h2 class="title thumb__title">Search Result</h2>
<ul class="breadcrumbs">
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li>Search Result</li>
</ul>
</div>
</div>
<div class="page">
<div class="container">
        <section class="article">
                <?php
                        $argc = array(
                                'orderby' => 'date',
                                'order' => 'DESC',
                                's' => get_search_query(),
                        );
                        $query = new WP_Query ( $argc );
                ?>
                <?php if ( $query->have_posts() ) : ?>
                        <h2 class="title">Search Result: <?php the_search_query(); ?></h2>
                        <div class="articles">
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <article class="articles__item">
                                <div class="articles__thumb">
                                <?php the_post_thumbnail(large); ?>
                                        <span class="articles__tag">Kitchan Design</span>
                                </div>
                                <h3 class="articles__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="articles__info">
                                        <span class="articles__date"><?php echo get_the_date('j F, Y'); ?></span>
                                        <a href="<?php the_permalink(); ?>" class="articles__link"></a>
                                </div>
                                </article>
                        <?php endwhile; ?> 
                </div>  
                <?php else : ?>
                <p>Nothing found</p>
                <?php endif; ?>  
        </section>
</div>
</div>
<?php get_footer(); ?>