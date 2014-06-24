<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title><?php if ( is_tag() ) { echo wp_title('Tag:');if($paged > 1) printf(' - 第%s页',$paged);echo ' | '; bloginfo( 'name' );} elseif ( is_archive() ) {echo wp_title('');  if($paged > 1) printf(' - 第%s页',$paged);    echo ' | ';    bloginfo( 'name' );} elseif ( is_search() ) {echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );} elseif ( is_home() ) {bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);}  elseif ( is_404() ) {echo '页面不存在！ | '; bloginfo( 'name' );} else {echo wp_title( ' | ', false, right )  ; bloginfo( 'name' );} ?></title>
            <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
            <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <![endif]-->
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="Rika Akiba">
            <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/js/modernizer.min.js"></script>
            <!-- style file -->
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
            <script src="<?php bloginfo('template_directory'); ?>/js/imagesloaded.pkgd.min.js"></script>
            <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
            <link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
            <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
            <link rel="alternate" type="application/rss+xml" title="RSS 1.0" href="<?php bloginfo('rss_url'); ?>" />
            <link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url'); ?>" />
            <?php wp_head(); ?>
        </head>

        <body>
            <header>
                <div class="head-image-wrapper">
                    <div class="head-image"></div>
                </div>
            </header>
            <div class="component">
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li><a href="#"><span class="fa fa-home"></span></a></li>
                        <li><a href="#"><span class="fa fa-headphones"></span></a></li>
                        <li><a href="#"><span class="fa fa-desktop"></span></a></li>
                        <li><a href="#"><span class="fa fa-file"></span></a></li>
                        <li><a href="#"><span class="fa fa-cog"></span></a></li>
                    </ul>
                </div>
                <div id="cn-overlay" class="cn-overlay"></div>
            </div>
            <div class="blog-title content">
                <figure class="avatar-wrapper animate">
                    <a class="user-avatar" style="background-image: url(http://37.media.tumblr.com/avatar_5eb82c86ae6b_128.png)" href="/">
                        <img class="print-only invisible" alt="" src="http://37.media.tumblr.com/avatar_5eb82c86ae6b_128.png">
                    </a>
                </figure>
                <div class="title-group animate">
                    <h1>
                        <a href=" <?php echo home_url(); ?> "><?php bloginfo('name'); ?></a>
                    </h1>
                    <span class="description" style="color: rgba(68, 68, 68, 0.7);"> Akiba Rika's site </span>
                </div>
            </div>
            <section id="main" class="site-main">
                <div id="primary" class="content-area">
                    <article class="post">

                    </article>
                </div>
            </section>

            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cNav.js"></script>
        </body>
</html>