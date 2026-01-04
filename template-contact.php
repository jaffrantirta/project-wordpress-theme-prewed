<?php
/**
 * Template Name: Contact Us
 * Template untuk halaman Kontak
 */
get_header(); ?>

<div class="contact-page" style="padding-top: 100px; padding-bottom: 80px;">
    <!-- Page Header -->
    <section class="contact-header" style="background: linear-gradient(135deg, var(--light-bg), #fff); padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="section-subtitle">Hubungi Kami</p>
                    <h1 class="section-title"><?php the_title(); ?></h1>
                    <p style="max-width: 600px; margin: 20px auto 0; color: var(--text-color); font-size: 1.1rem;">
                        Kami siap membantu mewujudkan momen spesial Anda. Jangan ragu untuk menghubungi kami!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info & Form Section -->
    <section class="contact-content section-padding">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="contact-info-wrapper">
                        <!-- Address Card -->
                        <div class="info-card" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid var(--primary-color); box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
                            <div style="display: flex; align-items: flex-start; gap: 20px;">
                                <div class="info-icon" style="width: 60px; height: 60px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Alamat</h4>
                                    <p style="color: var(--text-color); margin: 0; line-height: 1.7;">
                                        Jl. Raya Ubud No. 123<br>
                                        Ubud, Gianyar<br>
                                        Bali, Indonesia 80571
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div class="info-card" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid var(--primary-color); box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
                            <div style="display: flex; align-items: flex-start; gap: 20px;">
                                <div class="info-icon" style="width: 60px; height: 60px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-phone" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Telepon</h4>
                                    <p style="color: var(--text-color); margin: 0; line-height: 1.7;">
                                        <a href="tel:+6281234567890" style="color: var(--text-color); text-decoration: none;">+62 812-3456-7890</a><br>
                                        <a href="tel:+6281234567891" style="color: var(--text-color); text-decoration: none;">+62 812-3456-7891</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div class="info-card" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid var(--primary-color); box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
                            <div style="display: flex; align-items: flex-start; gap: 20px;">
                                <div class="info-icon" style="width: 60px; height: 60px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <h4 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Email</h4>
                                    <p style="color: var(--text-color); margin: 0; line-height: 1.7;">
                                        <a href="mailto:info@jaffranprewed.com" style="color: var(--text-color); text-decoration: none;">info@jaffranprewed.com</a><br>
                                        <a href="mailto:booking@jaffranprewed.com" style="color: var(--text-color); text-decoration: none;">booking@jaffranprewed.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Card -->
                        <div class="info-card" style="background: var(--white); padding: 30px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid var(--primary-color); box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
                            <div style="display: flex; align-items: flex-start; gap: 20px;">
                                <div class="info-icon" style="width: 60px; height: 60px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-share-alt" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                                </div>
                                <div style="flex: 1;">
                                    <h4 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--secondary-color);">Sosial Media</h4>
                                    <div class="social-links" style="display: flex; gap: 10px;">
                                        <a href="https://facebook.com/jaffranprewed" target="_blank" style="width: 40px; height: 40px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='var(--primary-color)'; this.style.color='white';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--primary-color)';">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://instagram.com/jaffranprewed" target="_blank" style="width: 40px; height: 40px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='var(--primary-color)'; this.style.color='white';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--primary-color)';">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="https://twitter.com/jaffranprewed" target="_blank" style="width: 40px; height: 40px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='var(--primary-color)'; this.style.color='white';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--primary-color)';">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://youtube.com/jaffranprewed" target="_blank" style="width: 40px; height: 40px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='var(--primary-color)'; this.style.color='white';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--primary-color)';">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                        <a href="<?php echo 'https://wa.me/' . get_theme_mod('whatsapp_number', '6281234567890'); ?>" target="_blank" style="width: 40px; height: 40px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='#25D366'; this.style.color='white';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--primary-color)';">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="info-card" style="background: linear-gradient(135deg, var(--primary-color), #a88c58); padding: 30px; border-radius: 10px; color: white;">
                            <h4 style="font-size: 1.2rem; margin-bottom: 15px; color: white;">Jam Operasional</h4>
                            <div style="line-height: 2;">
                                <p style="margin-bottom: 5px; display: flex; justify-content: space-between;">
                                    <span>Senin - Jumat:</span>
                                    <strong>09:00 - 18:00</strong>
                                </p>
                                <p style="margin-bottom: 5px; display: flex; justify-content: space-between;">
                                    <span>Sabtu:</span>
                                    <strong>09:00 - 15:00</strong>
                                </p>
                                <p style="margin-bottom: 0; display: flex; justify-content: space-between;">
                                    <span>Minggu:</span>
                                    <strong>By Appointment</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-wrapper" style="background: var(--white); padding: 50px; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.08);">
                        <h3 style="font-size: 2rem; margin-bottom: 10px; color: var(--secondary-color);">Kirim Pesan</h3>
                        <p style="color: var(--text-color); margin-bottom: 30px;">Isi form di bawah ini dan kami akan segera menghubungi Anda kembali.</p>

                        <!-- Contact Form 7 will be inserted here, or use default HTML form -->
                        <?php
                        // Check if Contact Form 7 is installed and has a form
                        if (function_exists('wpcf7_contact_form')) {
                            // You can specify a form ID here
                            echo do_shortcode('[contact-form-7 id="1" title="Contact Form"]');
                        } else {
                            // Default HTML form
                        ?>
                        <form id="contactForm" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                            <input type="hidden" name="action" value="contact_form_submit">
                            <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" style="display: block; margin-bottom: 8px; color: var(--secondary-color); font-weight: 500;">Nama Lengkap *</label>
                                    <input type="text" id="name" name="contact_name" required class="form-control" placeholder="Nama Anda" style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 1rem;">
                                </div>

                                <div class="col-md-6">
                                    <label for="email" style="display: block; margin-bottom: 8px; color: var(--secondary-color); font-weight: 500;">Email *</label>
                                    <input type="email" id="email" name="contact_email" required class="form-control" placeholder="email@example.com" style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 1rem;">
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" style="display: block; margin-bottom: 8px; color: var(--secondary-color); font-weight: 500;">Nomor Telepon *</label>
                                    <input type="tel" id="phone" name="contact_phone" required class="form-control" placeholder="+62 812-3456-7890" style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 1rem;">
                                </div>

                                <div class="col-md-6">
                                    <label for="service" style="display: block; margin-bottom: 8px; color: var(--secondary-color); font-weight: 500;">Layanan yang Diminati *</label>
                                    <select id="service" name="contact_service" required class="form-control" style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 1rem;">
                                        <option value="">Pilih Layanan</option>
                                        <option value="Prewedding Photography">Prewedding Photography</option>
                                        <option value="Wedding Photography">Wedding Photography</option>
                                        <option value="Cinematic Video">Cinematic Video</option>
                                        <option value="Full Package">Full Package</option>
                                        <option value="Other">Lainnya</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="date" style="display: block; margin-bottom: 8px; color: var(--secondary-color); font-weight: 500;">Tanggal Acara (Perkiraan)</label>
                                    <input type="date" id="date" name="contact_date" class="form-control" style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 1rem;">
                                </div>

                                <div class="col-12">
                                    <label for="message" style="display: block; margin-bottom: 8px; color: var(--secondary-color); font-weight: 500;">Pesan *</label>
                                    <textarea id="message" name="contact_message" required rows="6" class="form-control" placeholder="Ceritakan tentang acara Anda dan apa yang Anda butuhkan..." style="width: 100%; padding: 12px 20px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 1rem; resize: vertical;"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn-primary-custom" style="padding: 15px 40px; font-size: 1.1rem;">
                                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php } ?>

                        <div id="formMessage" style="margin-top: 20px; display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" style="margin-top: 80px;">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-12">
                    <!-- Google Maps Embed - Replace with your actual location -->
                    <div class="map-container" style="position: relative; padding-bottom: 450px; height: 0; overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126214.40214184406!2d115.1885838!3d-8.4095178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sUbud%2C%20Gianyar%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1234567890"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding" style="background: var(--light-bg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <p class="section-subtitle">FAQ</p>
                    <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item" style="background: var(--white); border: none; margin-bottom: 15px; border-radius: 10px; overflow: hidden;">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: var(--white); color: var(--secondary-color); font-weight: 600; padding: 20px 25px; font-size: 1.1rem;">
                                    Berapa lama waktu yang dibutuhkan untuk pengiriman hasil foto?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px 25px; color: var(--text-color); line-height: 1.8;">
                                    Untuk hasil foto, biasanya kami kirimkan dalam 2-4 minggu setelah acara. Untuk video sinematik, membutuhkan waktu 4-6 minggu. Kami juga menyediakan sneak peek dalam 3-5 hari kerja.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item" style="background: var(--white); border: none; margin-bottom: 15px; border-radius: 10px; overflow: hidden;">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: var(--white); color: var(--secondary-color); font-weight: 600; padding: 20px 25px; font-size: 1.1rem;">
                                    Apakah ada biaya tambahan untuk lokasi di luar Bali?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px 25px; color: var(--text-color); line-height: 1.8;">
                                    Ya, untuk lokasi di luar Bali akan ada biaya tambahan untuk transportasi dan akomodasi tim. Silakan hubungi kami untuk penawaran khusus.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item" style="background: var(--white); border: none; margin-bottom: 15px; border-radius: 10px; overflow: hidden;">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: var(--white); color: var(--secondary-color); font-weight: 600; padding: 20px 25px; font-size: 1.1rem;">
                                    Bagaimana sistem pembayarannya?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px 25px; color: var(--text-color); line-height: 1.8;">
                                    Kami meminta DP 30% untuk booking, 40% H-7 sebelum acara, dan 30% sisanya setelah hasil foto/video dikirim. Pembayaran dapat dilakukan via transfer bank atau cash.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item" style="background: var(--white); border: none; margin-bottom: 15px; border-radius: 10px; overflow: hidden;">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: var(--white); color: var(--secondary-color); font-weight: 600; padding: 20px 25px; font-size: 1.1rem;">
                                    Apakah bisa request revisi hasil foto?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="padding: 20px 25px; color: var(--text-color); line-height: 1.8;">
                                    Ya, kami menyediakan 2x revisi minor gratis untuk editing foto/video. Untuk revisi major atau lebih dari 2x akan dikenakan biaya tambahan sesuai tingkat kesulitan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12) !important;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(201, 169, 110, 0.1);
}

@media (max-width: 991px) {
    .contact-form-wrapper {
        margin-top: 30px;
        padding: 30px !important;
    }

    .map-container {
        padding-bottom: 300px !important;
    }
}
</style>

<script>
// Simple form validation and submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            const messageDiv = document.getElementById('formMessage');

            // Simple AJAX submission (you can replace with your preferred method)
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                messageDiv.style.display = 'block';
                if (data.success) {
                    messageDiv.innerHTML = '<div style="padding: 15px; background: #d4edda; color: #155724; border-radius: 5px;"><i class="fas fa-check-circle"></i> Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.</div>';
                    form.reset();
                } else {
                    messageDiv.innerHTML = '<div style="padding: 15px; background: #f8d7da; color: #721c24; border-radius: 5px;"><i class="fas fa-exclamation-circle"></i> Terjadi kesalahan. Silakan coba lagi.</div>';
                }
            })
            .catch(error => {
                messageDiv.style.display = 'block';
                messageDiv.innerHTML = '<div style="padding: 15px; background: #fff3cd; color: #856404; border-radius: 5px;"><i class="fas fa-info-circle"></i> Sedang dalam pengembangan. Silakan hubungi kami via WhatsApp atau email.</div>';
            });
        });
    }
});
</script>

<?php get_footer(); ?>
