<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fachri Property Group</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Kantor Section - PALING ATAS -->
    <section class="kantor">
        <div class="kantor-overlay">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Fachri Property Group" class="kantor-logo">

            <h1 class="kantor-title">
                KANTOR PEMASARAN<br>
                <span>PERUMAHAN</span>
            </h1>

            <p class="kantor-tagline">"Beli Rumah Harus Fachri Property Group"</p>

            <a href="#home" class="btn-lihat">
                <i class="fas fa-search"></i>
                Lihat Unit
            </a>
        </div>
    </section>

    <!-- Begin Property Group 1 (Hero, Fasilitas, Lokasi) -->
    <div class="property-group" id="property-group-1">
        <!-- Hero Section dengan Slider - D'Fanisa Residence -->
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>D'Fanisa Residence</h1>
                <div class="hero-info">
                    <div class="info-box red">Jl. Karya - Pal IX</div>
                    <div class="info-box red">TIPE 50 CLUSTER</div>
                    <div class="info-box gold">TOTAL 147 UNIT</div>
                </div>

                <!-- Image Slider -->
                <div class="image-slider">
                    <div class="slider-container">
                        <div class="slide active">
                            <img src="{{ asset('images/dfanisafoto/dsatu.png') }}" alt="Tipe A - D'Fanisa Residence">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah ±9×14 - 9×19 meter</p>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('images/dfanisafoto/ddua.png') }}" alt="Tipe A - D'Fanisa Residence" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah ±9×14 - 9×19 meter</p>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('images/dfanisafoto/d3.jpeg') }}" alt="Tipe A - D'Fanisa Residence" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah ±9×14 - 9×19 meter</p>
                            </div>
                        </div>
                    </div>

                    <button class="slider-btn prev-btn" type="button" aria-label="Slide sebelumnya">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn next-btn" type="button" aria-label="Slide berikutnya">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="slider-dots">
                        <button class="dot active" type="button" aria-label="Buka slide 1"></button>
                        <button class="dot" type="button" aria-label="Buka slide 2"></button>
                        <button class="dot" type="button" aria-label="Buka slide 3"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fasilitas Section -->
        <section id="fasilitas" class="fasilitas">
            <div class="container">
                <h2>FASILITAS</h2>
                <div class="fasilitas-grid">
                    <div class="fasilitas-item">
                        <i class="fas fa-home"></i>
                        <p>Bangunan Tunggal</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-ruler-combined"></i>
                        <p>Luas Tanah ±9×14 - 9×19 meter</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-building"></i>
                        <p>Lebar Jalan 6 meter</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-road"></i>
                        <p>Jalan Paving Blok / Cor Beton</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-bolt"></i>
                        <p>Listrik 2200 Watt*</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-shield-alt"></i>
                        <p>Gapura Kawasan Komplek</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-tree"></i>
                        <p>Taman Mini</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-bed"></i>
                        <p>1 Kamar Mandi</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-bath"></i>
                        <p>2 Kamar Tidur</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-border-style"></i>
                        <p>Pagar Pembatas Keliling</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-users"></i>
                        <p>Pos Jaga Kawasan Komplek</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lokasi Section -->
        <section id="lokasi" class="lokasi">
            <div class="container">
                <h2>LOKASI STRATEGIS</h2>
                <ul class="lokasi-list">
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Kampus IKIP Pontianak</li>
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Pasar</li>
                    <li><i class="fas fa-arrow-right"></i> 10 menit dari RS Kota</li>
                    <li><i class="fas fa-arrow-right"></i> Dekat dengan tempat ibadah (Masjid &amp; Gereja)</li>
                    <li><i class="fas fa-arrow-right"></i> Dekat dengan Polsek Kota Pontianak</li>
                </ul>
                <a href="https://wa.me/6285750777700?text=Halo,%20saya%20tertarik%20dengan%20unit%20di%20D'Fanisa%20Residence"
                    class="btn-wa" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i> Berminat terhadap unit ini
                </a>
            </div>
        </section>
    </div>
    <!-- End Property Group 1 -->

    <!-- Begin Property Group 2 -->
    <div class="property-group" id="property-group-2">
        <section id="home-2" class="hero">
            <div class="hero-content">
                <h1>Bumi Serdam Indah</h1>
                <div class="hero-info">
                    <div class="info-box red">Jl. Sungai Raya Dalam</div>
                    <div class="info-box red">TIPE 36 CLUSTER</div>
                    <div class="info-box gold">TOTAL 147 UNIT</div>
                </div>

                <div class="image-slider">
                    <div class="slider-container">
                        <div class="slide active">
                            <img src="{{ asset('images/Type36/1.png') }}" alt="Tipe A - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/2.png') }}" alt="Tipe B - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 9x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/3.png') }}" alt="Tipe C - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/4.png') }}" alt="Tipe C - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/9.png') }}" alt="Tipe C - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('images/Type36/ext 5.png') }}" alt="Eksterior - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/ext 6.png') }}" alt="Eksterior - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/ext 7.png') }}" alt="Eksterior - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/Type36/ext 8.png') }}" alt="Eksterior - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('images/Type36/sepuluh.png') }}" alt="Eksterior - Bumi Serdam Indah" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah 8x16m</p>
                            </div>
                        </div>
                    </div>

                    <button class="slider-btn prev-btn" type="button" aria-label="Slide sebelumnya">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn next-btn" type="button" aria-label="Slide berikutnya">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="slider-dots">
                        <button class="dot active" type="button" aria-label="Buka slide 1"></button>
                        <button class="dot" type="button" aria-label="Buka slide 2"></button>
                        <button class="dot" type="button" aria-label="Buka slide 3"></button>
                        <button class="dot" type="button" aria-label="Buka slide 4"></button>
                        <button class="dot" type="button" aria-label="Buka slide 5"></button>
                        <button class="dot" type="button" aria-label="Buka slide 6"></button>
                        <button class="dot" type="button" aria-label="Buka slide 7"></button>
                        <button class="dot" type="button" aria-label="Buka slide 8"></button>
                        <button class="dot" type="button" aria-label="Buka slide 9"></button>
                        <button class="dot" type="button" aria-label="Buka slide 10"></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="fasilitas-2" class="fasilitas">
            <div class="container">
                <h2>FASILITAS</h2>
                <div class="fasilitas-grid">
                    <div class="fasilitas-item">
                        <i class="fas fa-tree"></i>
                        <p>Penghijauan Komplek</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-road"></i>
                        <p>Jalan Komplek Aspal/ Cor Beton</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-arrows-alt-h"></i>
                        <p>Lebar Jalan Komplek 5 meter</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-archway"></i>
                        <p>Gapura Kawasan Komplek</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-home"></i>
                        <p>Bangunan Tunggal</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-ruler-combined"></i>
                        <p>Ukuran Tanah ±8x16 Meter</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-bolt"></i>
                        <p>Listrik Kombinasi 1300/ 2200/ 3500 Watt*</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-shield-alt"></i>
                        <p>Pos Jaga Kawasan Komplek</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="lokasi-2" class="lokasi">
            <div class="container">
                <h2>LOKASI STRATEGIS</h2>
                <ul class="lokasi-list">
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Kampus IKIP Pontianak</li>
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Pasar</li>
                    <li><i class="fas fa-arrow-right"></i> 10 menit dari RS Kota</li>
                    <li><i class="fas fa-arrow-right"></i> Dekat dengan tempat ibadah (Masjid &amp; Gereja)</li>
                    <li><i class="fas fa-arrow-right"></i> Dekat dengan Polsek Kota Pontianak</li>
                </ul>
                <a href="https://wa.me/6285750777700?text=Halo,%20saya%20tertarik%20dengan%20unit%20di%20BUMI%20SERDAM%20INDAH"
                    class="btn-wa" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i> Berminat terhadap unit ini
                </a>
            </div>
        </section>
    </div>
    <!-- End Property Group 2 -->

    <!-- Begin Property Group 3 -->
    <div class="property-group" id="property-group-3">
        <section id="home-3" class="hero">
            <div class="hero-content">
                <h1>The Avana Residence</h1>
                <div class="hero-info">
                    <div class="info-box red">Jl. Tebu(Kotamadya)</div>
                    <div class="info-box red">TIPE 60</div>
                    <div class="info-box gold">TOTAL 10 UNIT</div>
                </div>

                <div class="image-slider">
                    <div class="slider-container">
                        <div class="slide active">
                            <img src="{{ asset('images/davana/avanasatu.jpeg') }}" alt="Tipe A - The Avana Residence" loading="lazy">
                            <div class="slide-info">
                                <p>2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah +9,5x15 meter</p>
                            </div>
                        </div>
                    </div>

                    <button class="slider-btn prev-btn" type="button" aria-label="Slide sebelumnya">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn next-btn" type="button" aria-label="Slide berikutnya">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="slider-dots">
                        <button class="dot active" type="button" aria-label="Buka slide 1"></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="fasilitas-3" class="fasilitas">
            <div class="container">
                <h2>FASILITAS</h2>
                <div class="fasilitas-grid">
                    <div class="fasilitas-item">
                        <i class="fas fa-home"></i>
                        <p>Bangunan Tunggal</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-users"></i>
                        <p>Kawasan Padat Penduduk</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-ruler-combined"></i>
                        <p>Luas Tanah +9,5x15 meter</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-arrows-alt-h"></i>
                        <p>Lebar jalan Komplek 7 Meter</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-paint-roller"></i>
                        <p>Dinding Moulding</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-layer-group"></i>
                        <p>Plafond Trap</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-tree"></i>
                        <p>Penghijauan Komplek</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-warehouse"></i>
                        <p>Carport &amp; Taman</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-store"></i>
                        <p>Kanopi</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-tint"></i>
                        <p>Air PDAM</p>
                    </div>
                    <div class="fasilitas-item">
                        <i class="fas fa-archway"></i>
                        <p>Gapura Kawasan Komplek</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="lokasi-3" class="lokasi">
            <div class="container">
                <h2>LOKASI STRATEGIS</h2>
                <ul class="lokasi-list">
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Kampus Panca Bakti</li>
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Pasar Tradisional</li>
                    <li><i class="fas fa-arrow-right"></i> 5 menit dari Polsek Barat</li>
                    <li><i class="fas fa-arrow-right"></i> 10 menit dari Rumah Sakit Kota</li>
                    <li><i class="fas fa-arrow-right"></i> Dekat dengan tempat ibadah (Masjid &amp; Gereja)</li>
                </ul>
                <a href="https://wa.me/6285750777700?text=Halo,%20saya%20tertarik%20dengan%20unit%20di%20The%20Avana%20Residence"
                    class="btn-wa" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i> Berminat terhadap unit ini
                </a>
            </div>
        </section>
    </div>
    <!-- End Property Group 3 -->

    <!-- Testimoni Section -->
    <section id="testimoni" class="testimoni">
        <div class="container">
            <h2>TESTIMONI MEREKA</h2>
            <div class="video-container">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/fvQKuJYsuXs?si=ZMxSFQs_scQZaZi2"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Footer dengan Kontak -->
    <footer id="kontak" class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="footer-col">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Fachri Property Group" class="footer-logo-img">
                    <p class="footer-desc">
                        Fachri Property Group adalah pengembang properti terpercaya yang
                        menyediakan hunian berkualitas di lokasi strategis untuk keluarga Indonesia.
                    </p>
                </div>

                <!-- Kolom 2: Alamat & Kontak -->
                <div class="footer-col">
                    <h3>Hubungi Kami</h3>

                    <div class="contact-item-footer">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>Jl. Ampera No.22, RT.003/RW.015</p>
                            <p>Kel. Sei Raya, Kec. Pontianak Kota</p>
                            <p>Kalimantan Barat 78113</p>
                        </div>
                    </div>

                    <div class="contact-item-footer">
                        <i class="fas fa-phone-alt"></i>
                        <p>0561-817-7746</p>
                    </div>

                    <div class="contact-item-footer">
                        <i class="fas fa-envelope"></i>
                        <p>fachri@gmail.com</p>
                    </div>
                </div>

                <!-- Kolom 3: Tautan Cepat -->
                <div class="footer-col footer-col-links">
                    <h3>Tautan Cepat</h3>
                    <ul class="footer-links-list">
                        <li><a href="#home">D'Fanisa Residence</a></li>
                        <li><a href="#home-2">Bumi Serdam Indah</a></li>
                        <li><a href="#home-3">The Avana Residence</a></li>
                        <li><a href="#testimoni">Testimoni</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; <span id="current-year"></span> Fachri Property Group. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6285750777700?text=Halo,%20saya%20ingin%20bertanya%20tentang%20perumahan%20Fachri%20Property%20Group."
        class="wa-float" target="_blank" rel="noopener noreferrer" aria-label="Hubungi melalui WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>