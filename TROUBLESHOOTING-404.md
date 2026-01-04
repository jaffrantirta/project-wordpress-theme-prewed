# Troubleshooting 404 Error - Halaman Blog

## 🔴 Masalah: Halaman /blog menampilkan 404

Ini adalah masalah umum di WordPress karena `/blog` adalah slug yang reserved oleh WordPress core untuk posts archive.

---

## ✅ SOLUSI 1: Gunakan Template "Semua Artikel" (RECOMMENDED)

Template baru yang lebih aman dan tidak konflik dengan WordPress core.

### Langkah-langkah:

1. **Hapus halaman "Blog" lama** (jika ada)
   - Pages > All Pages
   - Hapus halaman yang menggunakan slug "blog"

2. **Buat halaman baru:**
   - Pages > Add New
   - **Judul**: "Artikel" atau "Semua Artikel"
   - **Slug**: akan otomatis jadi "artikel" atau "semua-artikel" ✅

3. **Pilih Template:**
   - Di sidebar kanan, **Page Attributes**
   - Template: **"Semua Artikel"**

4. **Publish**

5. **Flush Permalinks:**
   - Settings > Permalinks
   - Klik "Save Changes"

6. **Test:**
   - Buka: `yoursite.com/artikel/` ✅

7. **Update Menu:**
   - Appearance > Menus
   - Ganti link "Blog" dengan link ke halaman "Artikel"

**URL baru:** `yoursite.com/artikel/` atau `yoursite.com/semua-artikel/`

---

## ✅ SOLUSI 2: Fix Konflik WordPress Settings

Jika tetap ingin menggunakan `/blog`:

### Langkah 1: Cek WordPress Reading Settings

1. **Pergi ke Settings > Reading**

2. **Cek "Your homepage displays":**
   - Jika pilihan: **"A static page"**
   - **Homepage**: Pilih halaman home Anda
   - **Posts page**: **KOSONGKAN** (jangan pilih apapun)

   ATAU

   - Jika pilihan: **"Your latest posts"**
   - Ubah ke **"A static page"**
   - **Homepage**: Pilih halaman home
   - **Posts page**: Kosongkan

3. **Save Changes**

### Langkah 2: Buat Halaman Blog dengan Benar

1. **Pages > Add New**
2. **Judul**: "Blog"
3. **Klik "Edit" di samping judul untuk ubah slug:**
   - Pastikan slug: `blog`
4. **Template**: Pilih **"Blog Archive"** atau **"Semua Artikel"**
5. **Publish**

### Langkah 3: Flush Permalinks

1. **Settings > Permalinks**
2. **Klik "Save Changes"** (tidak perlu ubah apapun)
3. **Test akses /blog**

---

## ✅ SOLUSI 3: Gunakan .htaccess Rule (Advanced)

Jika solusi di atas tidak berhasil, tambahkan custom rewrite rule.

### Edit functions.php:

Tambahkan kode ini di [functions.php](functions.php):

```php
// Custom rewrite rule untuk halaman blog template
function jaffranprewed_blog_rewrite_rules() {
    // Dapatkan ID halaman yang menggunakan template blog
    $pages = get_pages(array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'template-all-posts.php'
    ));

    if (!empty($pages)) {
        $page_id = $pages[0]->ID;
        add_rewrite_rule(
            '^blog/page/?([0-9]{1,})/?$',
            'index.php?page_id=' . $page_id . '&paged=$matches[1]',
            'top'
        );
    }
}
add_action('init', 'jaffranprewed_blog_rewrite_rules');

// Flush rewrite rules saat tema diaktifkan
function jaffranprewed_flush_rewrite_rules() {
    jaffranprewed_blog_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'jaffranprewed_flush_rewrite_rules');
```

**Kemudian:**
1. Non-aktifkan tema
2. Aktifkan kembali tema
3. Test /blog

---

## ✅ SOLUSI 4: Gunakan Slug Alternatif Lainnya

Jika semua solusi di atas gagal, gunakan slug yang berbeda:

### Pilihan Slug Aman:

- ✅ `/artikel/`
- ✅ `/semua-artikel/`
- ✅ `/posting/`
- ✅ `/berita/`
- ✅ `/tulisan/`
- ✅ `/our-blog/`

### Cara:

1. Buat halaman baru dengan slug pilihan Anda
2. Template: "Semua Artikel"
3. Publish
4. Update menu

---

## 🎯 Template yang Tersedia

Sekarang ada **3 template** untuk blog:

### 1. **template-blog.php**
- Template Name: "Blog Archive"
- **Mungkin konflik** dengan /blog slug

### 2. **template-all-posts.php** ⭐ RECOMMENDED
- Template Name: "Semua Artikel"
- **AMAN**, tidak konflik
- Fitur sama persis dengan template-blog.php

### 3. **archive.php**
- Auto-fallback untuk category/tag/date archives
- Tidak untuk halaman manual

---

## 🔍 Cara Cek Konflik

### Cek Posts Page Setting:

```
Settings > Reading > Posts page
```

**Jika terisi dengan halaman template blog Anda:**
- ❌ INI MASALAHNYA!
- ✅ Kosongkan atau pilih halaman lain

### Cek Permalink Structure:

```
Settings > Permalinks
```

**Recommended:**
- Post name: `/%postname%/`
- Bukan: `/%category%/%postname%/` (bisa konflik)

---

## 📋 Checklist Troubleshooting

Ikuti checklist ini satu per satu:

- [ ] Buat halaman baru dengan slug `artikel` (bukan `blog`)
- [ ] Pilih template **"Semua Artikel"**
- [ ] Publish halaman
- [ ] Settings > Reading > Posts page: **Kosongkan**
- [ ] Settings > Permalinks > Save Changes
- [ ] Test akses `/artikel/`
- [ ] Jika berhasil, update menu
- [ ] Hapus halaman "Blog" lama (jika ada)

---

## 🚀 Quick Fix (Tercepat)

**Dalam 2 menit:**

1. Pages > Add New
2. Judul: **"Artikel"**
3. Template: **"Semua Artikel"**
4. Publish
5. Settings > Permalinks > Save
6. Buka: `yoursite.com/artikel/`
7. ✅ DONE!

---

## ❓ FAQ

### Q: Kenapa /blog error 404?
**A:** WordPress menggunakan `/blog` untuk built-in posts archive. Konflik dengan custom page template.

### Q: Apakah harus pakai slug "artikel"?
**A:** Tidak. Bisa pakai slug apapun selain: `blog`, `wp-admin`, `wp-content`, `wp-includes`

### Q: Pagination tidak berfungsi?
**A:** Pastikan template menggunakan `get_query_var('paged')` dan flush permalinks.

### Q: Kategori tidak muncul di dropdown?
**A:** Buat minimal 1 kategori di Posts > Categories

### Q: Artikel tidak muncul?
**A:** Pastikan sudah publish minimal 1 artikel di Posts > Add New

---

## 💡 Rekomendasi Akhir

**Gunakan struktur ini:**

```
Menu:
- Beranda (/)
- Tentang (/tentang)
- Layanan (/layanan)
- Portfolio (/portfolio)
- Artikel (/artikel) ← GUNAKAN INI
  └─ Kategori (/kategori)
- Kontak (/kontak)
```

**JANGAN gunakan:**
- `/blog` ❌
- `/posts` ❌
- `/archive` ❌

**GUNAKAN:**
- `/artikel` ✅
- `/semua-artikel` ✅
- `/tulisan` ✅

---

## 🛠️ Masih Error?

Jika masih 404 setelah semua solusi:

1. **Non-aktifkan semua plugin**
2. **Test lagi**
3. **Jika berhasil:** Aktifkan plugin satu-satu untuk cari yang konflik
4. **Cek file .htaccess:** Pastikan tidak ada rule custom yang menghalangi
5. **Hubungi hosting:** Mungkin ada server-level restriction

---

## ✅ Kesimpulan

**SOLUSI TERBAIK:**
1. Gunakan template **"Semua Artikel"** (template-all-posts.php)
2. Slug: `artikel` atau `semua-artikel`
3. URL: `yoursite.com/artikel/`
4. Update menu
5. Done! ✨

Tidak perlu pusing dengan konflik WordPress core `/blog` slug!
