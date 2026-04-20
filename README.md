# CRUD Produk Laravel

Aplikasi CRUD (Create, Read, Update, Delete) sederhana yang dibuat menggunakan framework Laravel untuk mengelola data produk.
Aplikasi ini dibuat sebagai tugas pembelajaran untuk memahami dasar penggunaan Laravel, PHP, dan MySQL.

---

## Fitur
- Menampilkan daftar produk
- Menambahkan data produk
- Mengedit data produk
- Menghapus data produk

---

## Teknologi yang Digunakan
- PHP
- Laravel
- MySQL
- XAMPP

---

## Prosedur Instalasi

1. Jalankan XAMPP, lalu aktifkan Apache dan MySQL
2. Buka terminal / CMD, lalu masuk ke folder project: cd C:\xampp3\htdocs\laravelnew
3. Install dependency: composer install
4. Copy file environment: cp .env.example .env php artisan key:generate
5. Buat database di phpMyAdmin dengan nama: laravelnew
6. Atur database di file .env: DB_DATABASE=laravelnew DB_USERNAME=root DB_PASSWORD=
7. Jalankan migrasi: php artisan migrate
8. Jalankan server: php artisan serve
9. Buka browser dan akses: http://127.0.0.1:8000/products

--

##CATATAN
Project ini hanya menggunakan fitur CRUD dasar tanpa tambahan styling seperti Bootstrap atau CSS framework.

--

#PEMBUAT
Nama: Azmi Akbar Nauli Dalimunthe
Kelas: A4
