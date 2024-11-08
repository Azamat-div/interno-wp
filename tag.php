<?php get_header(); ?>

<div class="thumb">
<img class="thumb__img" src="<?php echo INTERNO_IMG_DIR ?>/bg-blog.jpg" alt="">
<div class="thumb__info">
<h2 class="title thumb__title"><?php single_tag_title( '', true ); ?></h2>
<ul class="breadcrumbs">
      <li><a href="<?php echo home_url(); ?>">Home</a></li>
      <li><?php single_tag_title( '', true ); ?></li>
</ul>
</div>
</div>
<div class="page">
<div class="container">
      <section class="article">
            <?php
                  $tag_slug = get_query_var('tag');
                  $tag = get_term_by('slug', $tag_slug, 'post_tag'); 
                  $tag_id = $tag->term_id;
                  $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'tag_id' => $tag_id,
                        'post_per_page' => '-1',
                  );
                  $query = new WP_Query ($args);
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
