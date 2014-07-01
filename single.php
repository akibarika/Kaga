<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-7-1
 * Time: 上午4:16
 */
get_header(); ?>
    <section id="container" class="container intro-effect-fadeout">
        <?php while ( have_posts() ) : the_post(); ?>
            <header class="header">
                <div class="bg-img">
                    <?php the_post_thumbnail('post-bg-img', array('alt'=>'Background Image')); ?>
                </div>
                <div class="title">
                    <nav class="post-nav-head">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <p class="subline"><?php the_time('F j, Y') ?></p>
                </div>
            </header>
            <button class="trigger" data-info="Click to read">
                <span class="fa fa-long-arrow-down"></span>
            </button>
            <article class="content">
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
<?php get_footer(); ?>