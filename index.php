<?php get_header(); ?>
            <section id="main" class="site-main">
                <div id="primary" class="content-area">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="post">
                        <a class="post-thumbnail" href="<?php the_permalink() ?>" title="Permanent Link: <?php the_title(); ?>">
                            <div class="post-image"></div>
                            <?php if ( has_post_thumbnail() ){
                                the_post_thumbnail('post-thumbnail', array('class'=>'attachment-full-width'));
                            } ?>
                        </a>
                        <header class="entry-header">
                            <div class="entry-meta">
                                <span class="cat-links">
                                    <?php the_category(' '); ?>
                                </span>
                            </div>
                            <h1 class="entry-title">
                                <a rel="bookmark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </h1>
                            <div class="entry-meta">

                            </div>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    <?php else : ?>
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