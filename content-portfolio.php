<?php
/**
 * The template for displaying portfolio
 *
 */
?>


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
            <span class="entry-date">
                <a rel="bookmark" href="<?php the_permalink() ?>"><time class="fa fa-clock-o time-link"><?php the_time('F j, Y'); ?></time></a>
            </span>
            <span class="comments-link">
                <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'fa fa-comment-o  comment-link', 'Comments are off for this post'); ?>
            </span>
        </div>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>