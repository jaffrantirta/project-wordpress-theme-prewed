<?php get_header(); ?>

<div class="page-content" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <?php
                while (have_posts()) : the_post();
                ?>
                    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="page-thumbnail mb-4">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded')); ?>
                            </div>
                        <?php endif; ?>

                        <header class="entry-header mb-4">
                            <h1 class="entry-title" style="font-size: 3rem; color: var(--secondary-color); text-align: center;">
                                <?php the_title(); ?>
                            </h1>
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
                    </article>

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
