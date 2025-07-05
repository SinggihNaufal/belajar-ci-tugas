# Toko Online CodeIgniter 4

Proyek ini adalah platform toko online yang dibangun menggunakan [CodeIgniter 4](https://codeigniter.com/). Sistem ini menyediakan beberapa fungsionalitas untuk toko online, termasuk manajemen produk, keranjang belanja, dan sistem transaksi.

## Daftar Isi

- [Fitur](#fitur)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Struktur Proyek](#struktur-proyek)

## Fitur

- Katalog Produk
  - Tampilan produk dengan gambar
  - Pencarian produk
- Keranjang Belanja
  - Tambah/hapus produk
  - Update jumlah produk
- Sistem Transaksi
  - Proses checkout
  - Riwayat transaksi
- Panel Admin
  - Manajemen produk (CRUD)
  - Manajemen kategori
  - Manajemen Diskon
  - Laporan transaksi
  - Export data ke PDF
- Sistem Autentikasi
  - Login/Register pengguna
  - Manajemen akun
- UI Responsif dengan NiceAdmin template

## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Web server (XAMPP)

## Instalasi

1. **Clone repository ini**
   ```bash
   git clone [URL repository]
   cd belajar-ci-tugas
   ```
2. **Install dependensi**
   ```bash
   composer install
   ```
3. **Konfigurasi database**

   - Start module Apache dan MySQL pada XAMPP
   - Buat database **db_ci4** di phpmyadmin.
   - copy file .env dari tutorial https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

4. **Jalankan migrasi database**
   ```bash
   php spark migrate
   ```
5. **Seeder data**
   ```bash
   php spark db:seed ProductSeeder
   ```
   ```bash
   php spark db:seed UserSeeder
   ```
   ```bash
   php spark db:seed DiskonSeeder
   ```
6. **Jalankan server**
   ```bash
   php spark serve
   ```
7. **Akses aplikasi**
   Buka browser dan akses `http://localhost:8080` untuk melihat aplikasi.

## Struktur Proyek

Proyek menggunakan struktur MVC CodeIgniter 4:

- app/Controllers - Logika aplikasi dan penanganan request
  - ApiController.php - API endpoint
  - AuthController.php - Autentikasi pengguna
  - DiskonController.php - Manajemen diskon
  - Home.php - Halaman utama
  - ProdukController.php - Manajemen produk
  - ProdukKategoriController.php - Manajemen kategori produk
  - TransaksiController.php - Proses transaksi
- app/Models - Model untuk interaksi database
  - DiskonModel.php - Model diskon
  - ProductCategoryModel.php - Model kategori produk
  - ProductModel.php - Model produk
  - TransactionDetailModel.php - Model detail transaksi
  - TransactionModel.php - Model transaksi
  - UserModel.php - Model pengguna
- app/Views - Template dan komponen UI
  - components/Footer.php - Komponen footer
  - components/Header.php - Komponen header
  - components/sidebar.php - Komponen sidebar
  - layout.php - Template layout
  - layout_clear.php - Template layout tanpa header dan footer
  - v_checkout.php - Halaman checkout
  - v_contact.php - Halaman Kontak
  - v_diskon.php - Halaman diskon
  - v_home.php - Halaman utama
  - v_keranjang.php - Halaman keranjang
  - v_login.php - Halaman login
  - v_produk_kategori.php - Halaman kategori produk
  - v_produk.php - Tampilan produk
  - v_keranjang.php - Halaman keranjang
  - v_profile.php - Halaman profil detail pembelian
- public/img - Gambar produk dan aset
- public/NiceAdmin - Template admin
- public/dashboard-toko - Halaman PHP untuk melihat laporan transaksi detail
