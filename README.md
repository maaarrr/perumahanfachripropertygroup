<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Fachri Property Group - One Page Website

Website landing page untuk **Fachri Property Group**, pengembang properti terpercaya yang menyediakan hunian berkualitas di lokasi strategis untuk keluarga Indonesia.

## Fitur

- Landing page responsif
- Informasi unit perumahan (D'Fanisa Residence, Bumi Serdam Indah, The Avana Residence)
- Galeri gambar & slider unit
- Kontak WhatsApp langsung
- Testimoni video YouTube
- Footer dengan alamat & tautan cepat

## Struktur Folder

- `public/`  
  Berisi file statis (CSS, JS, gambar, favicon)
- `resources/views/welcome.blade.php`  
  Halaman utama (one page)
- `routes/web.php`  
  Routing utama Laravel

## Cara Menjalankan

1. **Clone repo ini**
2. Jalankan `composer install`
3. Copy `.env.example` ke `.env` dan sesuaikan konfigurasi (jika perlu)
4. Jalankan `php artisan key:generate`
5. Jalankan server:
    ```
    php artisan serve
    ```
6. Akses di browser: [http://localhost:8000](http://localhost:8000)  
   (atau domain lokal sesuai konfigurasi)

## Catatan

- Semua gambar dan file statis ada di folder `public/`
- Tidak ada backend database, hanya one page statis
- Untuk mengubah unit atau kontak, edit file `resources/views/welcome.blade.php`

## Lisensi

Project ini untuk keperluan presentasi dan promosi.  
Silakan modifikasi sesuai kebutuhan.

---

**Fachri Property Group**  
Website by [maaarrr](https://github.com/maaarrr)
