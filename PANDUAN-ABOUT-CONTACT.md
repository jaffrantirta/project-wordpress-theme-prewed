# Panduan Template About Us & Contact

Tema ini dilengkapi dengan 2 custom page template untuk halaman About Us dan Contact dengan desain elegant dan minimalist.

---

## 📄 Template yang Tersedia

### 1. **About Us Template** (template-about.php)
### 2. **Contact Us Template** (template-contact.php)

---

## 🎯 1. ABOUT US TEMPLATE

Template untuk halaman Tentang Kami dengan sections lengkap.

### Fitur:

✅ **Hero Section**
- Featured image dari halaman
- Judul & excerpt/konten awal
- 3 statistik boxes (custom)

✅ **Our Story Section**
- Konten lengkap dari page editor
- Layout 1 kolom lebar

✅ **Our Values Section**
- 3 value cards dengan icon
- Icon Font Awesome
- Hover effects

✅ **Team Section**
- Grid 4 fotografer
- Team photos dengan hover overlay
- Social media links

✅ **CTA Section**
- Call-to-action dengan gradient background
- Button ke halaman contact

### Cara Setup:

**1. Buat Halaman Baru:**
```
Pages > Add New
```

**2. Isi Form:**
- **Judul:** `Tentang Kami` atau `About Us`
- **Content:** Tulis cerita lengkap perusahaan Anda
- **Excerpt:** (optional) Ringkasan singkat yang muncul di hero

**3. Set Featured Image:**
- Sidebar kanan > **Featured Image**
- Upload foto tim/studio (ukuran: 800x600px landscape)

**4. Pilih Template:**
- Sidebar kanan > **Page Attributes**
- **Template:** Pilih **"About Us"**

**5. Publish**

**6. Tambahkan ke Menu:**
```
Appearance > Menus
Add halaman "Tentang Kami"
```

---

### Kustomisasi Content:

**Statistik (Edit di template-about.php baris 31-43):**

```php
<h3>10+</h3>
<p>Tahun Pengalaman</p>
```

Ubah angka dan teks sesuai data Anda:
- Tahun pengalaman
- Jumlah klien
- Jumlah penghargaan
- Atau statistik lain

**Values/Nilai-Nilai (Edit baris 84-126):**

Default 3 values:
1. Passion (Heart icon)
2. Profesionalisme (Award icon)
3. Kepercayaan (Handshake icon)

Ubah icon dengan kode Font Awesome:
```php
<i class="fas fa-heart"></i>
```

Pilihan icon lain:
- `fa-star` - Bintang
- `fa-thumbs-up` - Jempol
- `fa-shield-alt` - Shield
- `fa-certificate` - Sertifikat

**Team Section (Edit baris 137-203):**

Default 4 team members. Untuk menambah/kurangi:

Duplikat block ini:
```php
<div class="col-lg-3 col-md-6">
    <div class="team-card">
        <!-- Team content -->
    </div>
</div>
```

Ubah:
- Nama fotografer
- Posisi/role
- Link social media
- Foto (upload ke `/assets/images/`)

---

## 📞 2. CONTACT US TEMPLATE

Template untuk halaman Kontak dengan form lengkap.

### Fitur:

✅ **Contact Information Cards**
- Alamat dengan icon
- Telepon
- Email
- Social media links
- Jam operasional

✅ **Contact Form** (Built-in)
- Nama lengkap
- Email
- Nomor telepon
- Layanan yang diminati (dropdown)
- Tanggal acara
- Pesan
- Auto-email notification
- Auto-reply ke customer

✅ **Google Maps**
- Embedded map location

✅ **FAQ Accordion**
- 4 FAQ dengan Bootstrap accordion
- Expandable/collapsible

### Cara Setup:

**1. Buat Halaman Baru:**
```
Pages > Add New
```

**2. Isi Form:**
- **Judul:** `Kontak` atau `Contact Us`
- **Content:** (optional, tidak ditampilkan di template)

**3. Pilih Template:**
- Sidebar kanan > **Page Attributes**
- **Template:** Pilih **"Contact Us"**

**4. Publish**

**5. Tambahkan ke Menu**

---

### Kustomisasi Informasi Kontak:

**Edit di template-contact.php:**

**Alamat (Baris 34-41):**
```php
Jl. Raya Ubud No. 123<br>
Ubud, Gianyar<br>
Bali, Indonesia 80571
```

**Telepon (Baris 48-56):**
```php
<a href="tel:+6281234567890">+62 812-3456-7890</a>
```

**Email (Baris 67-75):**
```php
<a href="mailto:info@jaffranprewed.com">info@jaffranprewed.com</a>
```

**Social Media (Baris 86-97):**
```php
<a href="https://facebook.com/jaffranprewed" target="_blank">
```

**Jam Operasional (Baris 113-125):**
```php
<span>Senin - Jumat:</span>
<strong>09:00 - 18:00</strong>
```

---

### Setup Google Maps:

**1. Dapatkan Embed Code:**
- Buka Google Maps
- Cari lokasi Anda
- Klik Share > Embed a map
- Copy iframe code

**2. Edit Template (Baris 270-279):**

Ganti iframe src dengan embed code Anda:
```php
<iframe
    src="YOUR_GOOGLE_MAPS_EMBED_URL_HERE"
    ...
</iframe>
```

---

### Contact Form Setup:

Form sudah **built-in** dan berfungsi otomatis!

**Fitur Form:**
- ✅ Email notification ke admin
- ✅ Auto-reply ke customer
- ✅ Form validation
- ✅ AJAX submission
- ✅ Security nonce

**Email akan dikirim ke:**
- Admin email (Settings > General > Email Address)

**Customize Email:**

Edit di [functions.php](functions.php) baris 567-634:

```php
function jaffranprewed_handle_contact_form() {
    // Email content here
}
```

---

### FAQ Customization:

**Edit FAQ (Baris 292-346):**

Template default 4 FAQ. Untuk menambah:

**Duplikat block ini:**
```php
<div class="accordion-item">
    <h3 class="accordion-header">
        <button class="accordion-button collapsed" ...>
            Pertanyaan Anda?
        </button>
    </h3>
    <div id="faqX" class="accordion-collapse collapse">
        <div class="accordion-body">
            Jawaban Anda
        </div>
    </div>
</div>
```

**Ubah:**
- `id="faqX"` - unique ID untuk setiap FAQ
- `data-bs-target="#faqX"` - sesuaikan dengan ID
- Pertanyaan & jawaban

---

## 🎨 Styling & Colors

Kedua template menggunakan variabel CSS tema:

```css
--primary-color: #c9a96e
--secondary-color: #2c2c2c
--text-color: #4a4a4a
--light-bg: #f8f8f8
```

Untuk mengubah warna, edit [style.css](style.css) baris 14-19.

---

## 📱 Responsive Design

Kedua template **fully responsive**:

**Desktop (>992px):**
- About: 2 columns hero, 3 values, 4 team members
- Contact: Sidebar info + form

**Tablet (768-991px):**
- About: 1-2 columns, stacked layout
- Contact: Full width, stacked

**Mobile (<768px):**
- About: 1 column, vertical stack
- Contact: 1 column, simplified

---

## 🔧 Integrasi Contact Form 7 (Optional)

Jika ingin menggunakan Contact Form 7:

**1. Install Plugin:**
```
Plugins > Add New > Contact Form 7
```

**2. Buat Form:**
```
Contact > Add New
```

**3. Copy Shortcode:**
```
[contact-form-7 id="123" title="Contact Form"]
```

**4. Edit template-contact.php (Baris 148):**

Template akan auto-detect CF7:
```php
if (function_exists('wpcf7_contact_form')) {
    echo do_shortcode('[contact-form-7 id="YOUR_ID"]');
}
```

---

## 💡 Tips & Best Practices

### About Us:

1. **Featured Image:**
   - Gunakan foto tim berkualitas tinggi
   - Ukuran minimal: 1200x800px
   - Format: JPG atau PNG

2. **Content:**
   - Ceritakan sejarah perusahaan
   - Visi & misi
   - Keunikan Anda
   - 300-500 kata optimal

3. **Team Photos:**
   - Ukuran sama untuk semua (consistency)
   - Background seragam lebih baik
   - Square/portrait orientation

### Contact:

1. **Informasi Lengkap:**
   - Alamat yang jelas dengan landmark
   - Multiple contact methods
   - Response time expectation

2. **Google Maps:**
   - Pin lokasi yang akurat
   - Zoom level yang tepat
   - Tampilkan landmark sekitar

3. **FAQ:**
   - Answer common questions
   - Be specific & helpful
   - Update regularly

---

## 🎯 Recommended Page Structure

**Menu Navigation:**
```
Beranda
Tentang Kami     ← About template
Layanan
Portfolio
Artikel
Kontak          ← Contact template
```

---

## 🚀 Quick Setup Checklist

### About Us:
- [ ] Buat halaman "Tentang Kami"
- [ ] Pilih template "About Us"
- [ ] Upload featured image
- [ ] Tulis konten cerita perusahaan
- [ ] Edit statistik (tahun, klien, penghargaan)
- [ ] Upload foto tim
- [ ] Update nama & posisi tim
- [ ] Link social media tim
- [ ] Publish & tambahkan ke menu

### Contact:
- [ ] Buat halaman "Kontak"
- [ ] Pilih template "Contact Us"
- [ ] Update alamat lengkap
- [ ] Update nomor telepon
- [ ] Update email
- [ ] Update social media links
- [ ] Setup Google Maps embed
- [ ] Update jam operasional
- [ ] Customize FAQ
- [ ] Test form submission
- [ ] Publish & tambahkan ke menu

---

## 📧 Testing Contact Form

**Test Form:**

1. Isi form dengan data test
2. Submit
3. Check:
   - ✅ Success message muncul?
   - ✅ Email diterima di admin email?
   - ✅ Auto-reply diterima customer?
   - ✅ Data lengkap di email?

**Troubleshooting:**

**Email tidak dikirim:**
- Check WordPress email settings
- Install WP Mail SMTP plugin
- Check spam folder

**Form error:**
- Check browser console for errors
- Verify nonce in form
- Check PHP error logs

---

## 🎨 Customization Ideas

### About Us:
- Tambah section achievements/awards
- Tambah video profile
- Tambah timeline perusahaan
- Tambah client logos

### Contact:
- Tambah live chat widget
- Tambah booking calendar
- Tambah office hours countdown
- Tambah multiple office locations

---

## 📁 Files Created:

- ✅ [template-about.php](template-about.php)
- ✅ [template-contact.php](template-contact.php)
- ✅ Contact form handler di [functions.php](functions.php)
- ✅ [PANDUAN-ABOUT-CONTACT.md](PANDUAN-ABOUT-CONTACT.md)

---

**Semua template siap digunakan dengan desain elegant & minimalist!** ✨

Tinggal buat halaman, pilih template, isi konten, dan publish! 🚀
