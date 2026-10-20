# 🥤 Sistem Penjualan Minuman - Proyek Capstone

Repositori ini berisi progres pengerjaan Proyek Capstone untuk mata kuliah Pemrograman Berbasis Platform. 

**Pengembang:** Gaza, Nizar , Rafli  
**Status Saat Ini:** Selesai Modul Praktikum Pertemuan 6

---

## 📈 Langkah Progres (Pertemuan 6)
Pada pertemuan ke-6 ini, kami telah berhasil mengimplementasikan struktur *Database* menggunakan **Migration** dan **Eloquent ORM** di Laravel. Berikut adalah rincian langkah yang sudah kami selesaikan:

1. **Konfigurasi Lingkungan (`.env`)**
   - Menghubungkan Laravel dengan database MySQL lokal bernama `penjualan_minuman`.

2. **Pembuatan Migration (Struktur Tabel)**
   - Membuat tabel `bahan_baku`: Menyimpan data stok bahan baku (id, nama_bahan, stok, satuan).
   - Membuat tabel `menu`: Menyimpan daftar menu minuman (id, nama_menu, harga_jual).
   - Membuat tabel `penjualan`: Menyimpan histori transaksi yang berelasi dengan tabel menu menggunakan *Foreign Key* (`menu_id`).

3. **Konfigurasi Model Eloquent ORM**
   - Mengatur `protected $table` agar nama tabel sesuai dengan rancangan ERD (contoh: tabel `menu` bukan `menus`).
   - Mengamankan database dengan mendaftarkan kolom yang boleh diisi melalui `protected $fillable` (mencegah *mass-assignment*).

4. **Testing Database via Tinker**
   - Memasukkan data uji coba pertama (misal: "Es Kopi Susu") menggunakan antarmuka terminal `php artisan tinker` tanpa menggunakan *query* SQL manual.

5. **Integrasi MVC (Model-View-Controller)**
   - Membuat `MenuController` untuk mengambil data asli dari database.
   - Menampilkan data *real* dari database ke halaman *browser* pada *route* `/menu` (View: `index.blade.php`).

---

## 🛠️ Cara Menjalankan Proyek (Untuk Teman Kelompok)
Bagi anggota tim yang baru melakukan *clone* repositori ini, ikuti langkah berikut agar proyek bisa berjalan di laptop masing-masing:

1. Nyalakan **Apache** dan **MySQL** di XAMPP.
2. Buka `http://localhost/phpmyadmin` dan buat database baru dengan nama `penjualan_minuman`.
3. Buka terminal di VS Code, ketik: `composer install` (untuk mengunduh *library*).
4. Salin file `.env.example` menjadi `.env`. Buka filenya, pastikan `DB_DATABASE=penjualan_minuman` dan `DB_USERNAME=root`.
5. Ketik di terminal: `php artisan key:generate`.
6. Bentuk tabel di laptopmu dengan perintah: `php artisan migrate`.
7. Jalankan server: `php artisan serve`, lalu buka `http://localhost:8000/menu`.
