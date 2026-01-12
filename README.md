<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 🏘️ Fachri Property Group

Website promosi perumahan menggunakan **Laravel**.  
Terdiri dari landing page one page dan dashboard admin menggunakan Filament.

## 🚀 Fitur

- Landing page responsif
- Informasi unit perumahan (D'Fanisa Residence, Bumi Serdam Indah, The Avana Residence)
- Galeri gambar & slider unit
- Kontak WhatsApp langsung
- Testimoni video YouTube
- Footer dengan alamat & tautan cepat
- Dashboard Admin dengan Filament
- Manajemen data perumahan
- Database MySQL

## 💻 Tech Stack

- Laravel 11
- Filament 3.x
- MySQL
- Tailwind CSS

## 📦 Instalasi

```bash
# Clone repository
git clone https://github.com/maaarrr/perumahanfachripropertygroup.git

# Masuk ke folder project
cd perumahanfachripropertygroup

# Install dependencies
composer install
npm install

# Copy .env
cp .env.example .env

# Generate key
php artisan key:generate

# Migrate database
php artisan migrate

# Jalankan server
php artisan serve
```

## Struktur Folder

- `public/`  
  Berisi file statis (CSS, JS, gambar, favicon)
- `resources/views/welcome.blade.php`  
  Halaman utama (one page)
- `routes/web.php`  
  Routing utama Laravel

## Catatan

- Semua gambar dan file statis ada di folder `public/`
- Untuk mengubah unit atau kontak, edit file `resources/views/welcome.blade.php`
- Dashboard admin dan manajemen data menggunakan Filament (akses sesuai konfigurasi admin)

## Lisensi

Project ini untuk keperluan presentasi dan promosi.  
Silakan modifikasi sesuai kebutuhan.

---

**Fachri Property Group**  
Website by [maaarrr](https://github.com/maaarrr)
