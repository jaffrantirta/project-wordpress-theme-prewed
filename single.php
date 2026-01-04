<?php get_header(); ?>

<div class="single-post-page" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php
                while (have_posts()) : the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail mb-4">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded')); ?>
                            </div>
                        <?php endif; ?>

                        <header class="entry-header mb-4">
                            <h1 class="entry-title" style="font-size: 2.5rem; color: var(--secondary-color);">
                                <?php the_title(); ?>
                            </h1>
                            <div class="entry-meta" style="color: var(--primary-color); margin-bottom: 20px;">
                                <span><i class="far fa-calendar"></i> <?php echo get_the_date('d F Y'); ?></span>
                                <span style="margin-left: 15px;"><i class="far fa-user"></i> <?php the_author(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span style="margin-left: 15px;"><i class="far fa-folder"></i> <?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <div class="entry-content" style="line-height: 1.8; font-size: 1.05rem;">
                            <?php
                            the_content();

                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . __('Pages:', 'jaffranprewed'),
                                'after'  => '</div>',
                            ));
                            ?>
                        </div>

                        <?php if (has_tag()) : ?>
                            <footer class="entry-footer mt-4 pt-4" style="border-top: 1px solid #e0e0e0;">
                                <div class="tags">
                                    <i class="fas fa-tags" style="color: var(--primary-color);"></i>
                                    <?php the_tags('', ', ', ''); ?>
                                </div>
                            </footer>
                        <?php endif; ?>
                    </article>

                    <nav class="post-navigation mt-5 mb-5" style="border-top: 1px solid #e0e0e0; padding-top: 30px;">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                $prev_post = get_previous_post();
                                if (!empty($prev_post)) :
                                ?>
                                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="nav-previous">
                                        <span style="color: var(--primary-color); font-size: 0.9rem;">← Artikel Sebelumnya</span>
                                        <h5 style="margin-top: 10px;"><?php echo get_the_title($prev_post->ID); ?></h5>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 text-end">
                                <?php
                                $next_post = get_next_post();
                                if (!empty($next_post)) :
                                ?>
                                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="nav-next">
                                        <span style="color: var(--primary-color); font-size: 0.9rem;">Artikel Selanjutnya →</span>
                                        <h5 style="margin-top: 10px;"><?php echo get_the_title($next_post->ID); ?></h5>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </nav>

                    <?php
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
