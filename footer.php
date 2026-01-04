<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php else : ?>
                    <div class="footer-widget">
                        <h4>Tentang Kami</h4>
                        <p>Kami adalah fotografer profesional yang berfokus pada fotografi wedding dan prewedding di Bali. Dengan pengalaman lebih dari 10 tahun, kami siap mengabadikan momen indah Anda.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php else : ?>
                    <div class="footer-widget">
                        <h4>Link Cepat</h4>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">Tentang Kami</a></li>
                            <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Kontak</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php else : ?>
                    <div class="footer-widget">
                        <h4>Hubungi Kami</h4>
                        <p><i class="fas fa-map-marker-alt"></i> Bali, Indonesia</p>
                        <p><i class="fas fa-phone"></i> +62 812-3456-7890</p>
                        <p><i class="fas fa-envelope"></i> info@jaffranprewed.com</p>
                        <div class="social-links mt-3">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>

<?php if (get_theme_mod('whatsapp_show', true)) : ?>
    <?php
        $whatsapp_number = get_theme_mod('whatsapp_number', '6281234567890');
        $whatsapp_message = get_theme_mod('whatsapp_message', 'Halo, saya tertarik dengan jasa fotografi Anda');
        $whatsapp_url = 'https://wa.me/' . $whatsapp_number . '?text=' . urlencode($whatsapp_message);
    ?>
    <a href="<?php echo esc_url($whatsapp_url); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat via WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
