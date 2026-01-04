# Panduan Halaman Kategori & Blog

Tema ini sekarang dilengkapi dengan 3 template untuk menampilkan artikel berdasarkan kategori.

## 📄 Template yang Tersedia

### 1. **category.php** - Halaman Kategori Individual
Template ini otomatis digunakan ketika user mengklik kategori.

**Fitur:**
- ✅ Header kategori dengan judul dan deskripsi
- ✅ Jumlah artikel di kategori
- ✅ Grid artikel 2 kolom (main content)
- ✅ Sidebar dengan:
  - Search form
  - Daftar kategori lain
  - Artikel terbaru
  - Tag populer
- ✅ Pagination
- ✅ Responsive design

**Cara Akses:**
- User klik kategori dari blog post
- URL: `yoursite.com/category/nama-kategori/`
- Otomatis terpakai, tidak perlu setting

---

### 2. **template-categories.php** - Halaman Daftar Semua Kategori
Template untuk menampilkan semua kategori dalam bentuk grid cards.

**Fitur:**
- ✅ Grid cards semua kategori dengan thumbnail
- ✅ Jumlah artikel per kategori
- ✅ Deskripsi kategori
- ✅ Link ke setiap kategori
- ✅ Statistik (total kategori, artikel, tag)
- ✅ Artikel terbaru dari semua kategori
- ✅ Hover effects yang elegant

**Cara Setup:**

1. **Buat Halaman Baru:**
   - Login WordPress Admin
   - Pergi ke **Pages > Add New**

2. **Beri Judul:**
   - Judul: "Kategori" atau "Jelajahi Kategori"

3. **Pilih Template:**
   - Di sidebar kanan, cari **Page Attributes**
   - Di dropdown **Template**, pilih **"Daftar Kategori"**

4. **Publish:**
   - Klik **Publish**

5. **Tambahkan ke Menu:**
   - Pergi ke **Appearance > Menus**
   - Tambahkan halaman ini ke menu navigasi

**URL:** `yoursite.com/kategori/`

---

### 3. **template-blog.php** - Halaman Blog Archive
Template untuk menampilkan semua artikel dengan filter kategori.

**Fitur:**
- ✅ Semua artikel dalam grid 2 kolom
- ✅ Search bar untuk cari artikel
- ✅ Dropdown filter kategori
- ✅ Sidebar dengan:
  - Artikel populer
  - Daftar kategori
  - Newsletter subscribe form
- ✅ Pagination
- ✅ Responsive

**Cara Setup:**

1. **Buat Halaman Baru:**
   - Login WordPress Admin
   - Pergi to **Pages > Add New**

2. **Beri Judul:**
   - Judul: "Blog" atau "Artikel"

3. **Pilih Template:**
   - Di sidebar kanan, **Page Attributes**
   - Di dropdown **Template**, pilih **"Blog Archive"**

4. **Publish**

5. **Tambahkan ke Menu**

**URL:** `yoursite.com/blog/`

---

## 🎯 Cara Menggunakan

### Membuat Kategori

1. **Login WordPress Admin**
2. **Pergi ke Posts > Categories**
3. **Tambah Kategori Baru:**
   - **Name**: Nama kategori (contoh: "Tips Prewedding")
   - **Slug**: URL-friendly name (otomatis generate)
   - **Description**: Deskripsi kategori (akan muncul di halaman kategori)
4. **Klik Add New Category**

### Assign Kategori ke Post

1. **Buat atau Edit Post**
2. **Di sidebar kanan, cari "Categories"**
3. **Centang kategori yang sesuai**
4. **Publish atau Update**

### Setup Menu Navigasi

**Contoh struktur menu yang disarankan:**

```
Beranda
Tentang
Layanan
Portfolio
Blog (link ke template-blog.php)
  └─ Kategori (link ke template-categories.php)
  └─ Tips Prewedding (kategori 1)
  └─ Inspirasi Wedding (kategori 2)
Kontak
```

**Cara Setup:**

1. **Pergi ke Appearance > Menus**
2. **Buat menu baru atau edit existing**
3. **Tambahkan items:**
   - Dari **Pages**, tambahkan halaman "Blog" dan "Kategori"
   - Dari **Categories**, tambahkan kategori yang ingin ditampilkan
4. **Drag & drop untuk atur hierarchy**
5. **Assign ke "Primary Menu"**
6. **Save Menu**

---

## 🎨 Kustomisasi Tampilan

### Mengubah Jumlah Artikel per Halaman

**Di category.php (baris 36):**
```php
// Ubah 9 menjadi angka yang diinginkan
'posts_per_page' => 9,
```

**Di template-blog.php (baris 57):**
```php
'posts_per_page' => 9, // Ubah sesuai keinginan
```

### Mengubah Layout Grid

**2 kolom ke 3 kolom:**

Ubah:
```php
<div class="col-md-6">
```

Menjadi:
```php
<div class="col-md-4">
```

### Mengubah Warna

Edit di `style.css` atau tambahkan CSS custom di template:

```css
/* Ubah warna primary */
:root {
    --primary-color: #c9a96e; /* Ganti dengan warna lain */
}
```

---

## 📊 Widget Sidebar yang Tersedia

### Di category.php:

1. **Search Widget** - Form pencarian
2. **Categories List** - Daftar kategori lain
3. **Recent Posts** - 5 artikel terbaru
4. **Tags Cloud** - Tag populer

### Di template-blog.php:

1. **Popular Posts** - Artikel paling banyak komentar
2. **Categories** - Daftar kategori dengan jumlah
3. **Newsletter** - Form subscribe (optional)

---

## 💡 Tips & Best Practices

### Kategori

1. **Jangan terlalu banyak kategori**
   - Maksimal 8-10 kategori untuk kemudahan navigasi
   - Gunakan yang spesifik dan relevan

2. **Beri Deskripsi Kategori**
   - Deskripsi akan muncul di halaman kategori
   - Jelaskan jenis konten yang ada di kategori tersebut

3. **Gunakan Featured Image**
   - Setiap post harus punya featured image
   - Ukuran minimal: 800x600px
   - Untuk tampilan optimal di grid

### Blog Posts

1. **Konsisten dengan Featured Image**
   - Semua post harus punya featured image
   - Ukuran dan rasio yang konsisten

2. **Gunakan Excerpt**
   - Tulis excerpt manual untuk kontrol lebih baik
   - Atau biarkan auto-generate (20 kata pertama)

3. **Kategori per Post**
   - 1-2 kategori per post (jangan terlalu banyak)
   - Pilih yang paling relevan

---

## 🔧 Troubleshooting

### Kategori Tidak Muncul?

- Pastikan kategori sudah dibuat di **Posts > Categories**
- Pastikan ada post yang di-assign ke kategori tersebut
- Refresh cache jika menggunakan caching plugin

### Template Tidak Muncul?

- Pastikan file `.php` ada di folder tema
- Refresh halaman **Pages > Add New**
- Coba non-aktifkan lalu aktifkan kembali tema

### Pagination Tidak Bekerja?

- Cek di **Settings > Reading**
- Pastikan "Blog pages show at most" sudah diset
- Jika menggunakan custom query, pastikan parameter `paged` sudah benar

### Gambar Tidak Muncul?

- Pastikan post memiliki Featured Image
- Cek file `default-blog.jpg` ada di `/assets/images/`
- Upload gambar default jika belum ada

---

## 🎯 Rekomendasi Struktur Konten

### Contoh Kategori untuk Fotografer Wedding:

1. **Tips Prewedding** - Tips dan panduan prewedding
2. **Inspirasi Wedding** - Ide dan inspirasi pernikahan
3. **Behind The Scenes** - Cerita di balik layar
4. **Lokasi Foto** - Review lokasi foto di Bali
5. **Tutorial Fotografi** - Tips teknik fotografi
6. **Client Stories** - Cerita dari klien

### Contoh Post:

- "10 Lokasi Prewedding Terbaik di Bali"
- "Tips Memilih Gaun Prewedding yang Sempurna"
- "Behind The Scenes: Wedding di Uluwatu"
- dll.

---

## 📱 Responsive Design

Semua template sudah responsive:

- **Desktop (>992px)**: 2-3 kolom dengan sidebar
- **Tablet (768-991px)**: 2 kolom, sidebar di bawah
- **Mobile (<768px)**: 1 kolom penuh

---

## 🚀 Next Steps

1. ✅ Buat minimal 5 kategori
2. ✅ Buat minimal 10-15 artikel
3. ✅ Set featured image untuk semua artikel
4. ✅ Buat halaman "Kategori" dengan template
5. ✅ Buat halaman "Blog" dengan template
6. ✅ Tambahkan ke menu navigasi
7. ✅ Test di mobile dan desktop
8. ✅ Publish!

---

**Selamat menggunakan template kategori & blog!** 📚✨
