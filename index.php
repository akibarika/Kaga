<?php get_header(); ?>
    <section id="main" class="site-main">
        <div id="primary" class="content-area">
            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post();
                        get_template_part('content');
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