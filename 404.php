<?php get_header(); ?>

<div class="error-404-page" style="padding: 150px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="error-content">
                    <h1 style="font-size: 8rem; color: var(--primary-color); font-weight: 700; margin-bottom: 20px;">404</h1>
                    <h2 style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 20px;">Halaman Tidak Ditemukan</h2>
                    <p style="font-size: 1.2rem; color: var(--text-color); margin-bottom: 30px;">
                        Maaf, halaman yang Anda cari tidak dapat ditemukan. Halaman mungkin telah dipindahkan atau dihapus.
                    </p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary-custom">
                        <i class="fas fa-home"></i> Kembali ke Beranda
                    </a>
                </div>

                <div class="search-form mt-5">
                    <p style="margin-bottom: 15px; font-weight: 500;">Atau coba cari yang Anda butuhkan:</p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
