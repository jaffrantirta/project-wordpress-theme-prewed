<?php
/**
 * Template Name: Blog Archive
 * Template untuk menampilkan semua artikel blog
 */
get_header(); ?>

<div class="blog-archive-page" style="padding-top: 100px; padding-bottom: 80px; background: var(--light-bg);">
    <div class="container">
        <!-- Page Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <p class="section-subtitle">Blog Kami</p>
                <h1 class="section-title">Semua Artikel</h1>
                <p style="max-width: 600px; margin: 20px auto 0; color: var(--text-color); font-size: 1.1rem;">
                    Tips, inspirasi, dan cerita seputar fotografi wedding & prewedding
                </p>
            </div>
        </div>

        <!-- Filter & Search Bar -->
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <form method="get" action="<?php echo esc_url(home_url('/')); ?>" style="display: flex; gap: 10px;">
                    <input type="text" name="s" class="form-control" placeholder="Cari artikel..." value="<?php echo get_search_query(); ?>" style="flex: 1; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 50px;">
                    <button type="submit" class="btn-primary-custom" style="border-radius: 50px; padding: 12px 30px;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-6 mb-3">
                <select id="categoryFilter" class="form-control" style="padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 50px; cursor: pointer;">
                    <option value="">Semua Kategori</option>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $cat) :
                    ?>
                        <option value="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                            <?php echo esc_html($cat->name); ?> (<?php echo $cat->count; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Blog Posts -->
                <div class="row g-4">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blog_posts = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 9,
                        'paged'          => $paged,
                        'post_status'    => 'publish',
                    ));

                    if ($blog_posts->have_posts()) :
                        while ($blog_posts->have_posts()) : $blog_posts->the_post();
                    ?>
                        <div class="col-md-6">
                            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-blog.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                    </a>
                                <?php endif; ?>

                                <div class="blog-content">
                                    <p class="blog-meta">
                                        <i class="far fa-calendar"></i> <?php echo get_the_date('d F Y'); ?>
                                        <?php if (has_category()) : ?>
                                            <span style="margin-left: 10px;">
                                                <i class="far fa-folder"></i> <?php the_category(', '); ?>
                                            </span>
                                        <?php endif; ?>
                                    </p>

                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                    <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    <?php
                        endwhile;
                    else :
                    ?>
                        <div class="col-12">
                            <div class="no-posts text-center" style="padding: 60px 20px; background: var(--white); border-radius: 10px;">
                                <i class="far fa-file-alt" style="font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                                <h3 style="color: var(--secondary-color); margin-bottom: 15px;">Belum Ada Artikel</h3>
                                <p style="color: var(--text-color); margin-bottom: 20px;">Artikel akan segera hadir. Stay tuned!</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-custom">
                                    <i class="fas fa-home"></i> Kembali ke Beranda
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if ($blog_posts->have_posts()) : ?>
                    <div class="row mt-5">
                        <div class="col-12">
                            <nav class="pagination-nav">
                                <?php
                                echo paginate_links(array(
                                    'total'     => $blog_posts->max_num_pages,
                                    'current'   => max(1, $paged),
                                    'mid_size'  => 2,
                                    'prev_text' => '<i class="fas fa-arrow-left"></i> Sebelumnya',
                                    'next_text' => 'Selanjutnya <i class="fas fa-arrow-right"></i>',
                                    'type'      => 'list',
                                ));
                                ?>
                            </nav>
                        </div>
                    </div>
                <?php
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <aside class="blog-sidebar">

                    <!-- Popular Posts -->
                    <div class="sidebar-widget" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h4 style="color: var(--secondary-color); margin-bottom: 20px; font-size: 1.3rem;">
                            <i class="fas fa-fire"></i> Artikel Populer
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <?php
                            $popular_posts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'orderby'        => 'comment_count',
                                'post_status'    => 'publish',
                            ));

                            if ($popular_posts->have_posts()) :
                                while ($popular_posts->have_posts()) : $popular_posts->the_post();
                            ?>
                                <li style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #e0e0e0;">
                                    <div style="display: flex; gap: 15px;">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div style="flex-shrink: 0;">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumbnail', array('style' => 'width: 80px; height: 80px; object-fit: cover; border-radius: 5px;')); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div style="flex: 1;">
                                            <h6 style="margin-bottom: 8px; font-size: 0.95rem; line-height: 1.4;">
                                                <a href="<?php the_permalink(); ?>" style="color: var(--secondary-color); text-decoration: none;">
                                                    <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                                                </a>
                                            </h6>
                                            <p style="font-size: 0.85rem; color: var(--primary-color); margin: 0;">
                                                <i class="far fa-calendar"></i> <?php echo get_the_date('d M Y'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-widget" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h4 style="color: var(--secondary-color); margin-bottom: 20px; font-size: 1.3rem;">
                            <i class="fas fa-folder"></i> Kategori
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <?php
                            $categories = get_categories(array('number' => 8));
                            foreach ($categories as $cat) :
                            ?>
                                <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #e0e0e0;">
                                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
                                       style="display: flex; justify-content: space-between; align-items: center; text-decoration: none; color: var(--text-color);">
                                        <span>
                                            <i class="far fa-folder" style="margin-right: 8px;"></i>
                                            <?php echo esc_html($cat->name); ?>
                                        </span>
                                        <span class="badge" style="background: var(--primary-color); color: white; padding: 3px 10px; border-radius: 20px; font-size: 0.8rem;">
                                            <?php echo $cat->count; ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Newsletter (Optional) -->
                    <div class="sidebar-widget" style="background: linear-gradient(135deg, var(--primary-color), #a88c58); padding: 30px; border-radius: 10px; color: white; text-align: center;">
                        <i class="fas fa-envelope" style="font-size: 3rem; margin-bottom: 15px; opacity: 0.9;"></i>
                        <h4 style="color: white; margin-bottom: 15px; font-size: 1.3rem;">Newsletter</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 20px; opacity: 0.9;">
                            Dapatkan tips fotografi & promo eksklusif langsung ke email Anda
                        </p>
                        <form style="display: flex; flex-direction: column; gap: 10px;">
                            <input type="email" placeholder="Email Anda" required style="padding: 12px; border: none; border-radius: 5px; font-size: 0.95rem;">
                            <button type="submit" style="padding: 12px; border: none; background: white; color: var(--primary-color); border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;">
                                Subscribe
                            </button>
                        </form>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>

<style>
.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    gap: 10px;
}

.pagination .page-numbers {
    display: inline-block;
    padding: 10px 18px;
    background: var(--white);
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-weight: 500;
}

.pagination .page-numbers:hover,
.pagination .page-numbers.current {
    background: var(--primary-color);
    color: var(--white);
}

.pagination .dots {
    padding: 10px 18px;
    color: var(--text-color);
}

@media (max-width: 991px) {
    .blog-sidebar {
        margin-top: 40px;
    }
}
</style>

<script>
document.getElementById('categoryFilter').addEventListener('change', function() {
    if (this.value) {
        window.location.href = this.value;
    }
});
</script>

<?php get_footer(); ?>
