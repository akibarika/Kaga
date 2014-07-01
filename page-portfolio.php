<?php
/**
 * Template Name: Portfolio Page Index
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-7-1
 * Time: 下午4:14
 */
get_header(); ?>
    <section id="main" class="site-main">
        <div id="primary" class="content-area">
            <?php query_posts(array('post_type'=>'portfolio'));
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part('content-portfolio');
                endwhile;
            else :
                ?>
                <article class="item i-404">
                    <div class="warp-content clearfix">
                        <div class="not-found">

                        </div>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
