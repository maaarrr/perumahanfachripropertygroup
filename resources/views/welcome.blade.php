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
            @if($settings && $settings->logo_path)
                <img src="{{ asset('storage/' . $settings->logo_path) }}" alt="Logo Fachri Property Group" class="kantor-logo">
            @else
                <img src="{{ asset('images/logo.png') }}" alt="Logo Fachri Property Group" class="kantor-logo">
            @endif

            <h1 class="kantor-title">
                {{ $settings->hero_title ?? 'KANTOR PEMASARAN' }}<br>
                <span>{{ $settings->hero_subtitle ?? 'PERUMAHAN' }}</span>
            </h1>

            <p class="kantor-tagline">{{ $settings->hero_tagline ?? '"Beli Rumah Harus Fachri Property Group"' }}</p>

            <a href="#home" class="btn-lihat">
                <i class="fas fa-search"></i>
                Lihat Unit
            </a>
        </div>
    </section>

    @foreach($properties as $index => $property)
    <!-- Begin Property Group {{ $index + 1 }} -->
    <div class="property-group" id="property-group-{{ $index + 1 }}">
        <!-- Hero Section dengan Slider -->
        <section id="{{ $index === 0 ? 'home' : 'home-' . ($index + 1) }}" class="hero">
            <div class="hero-content">
                <h1>{{ $property->name }}</h1>
                <div class="hero-info">
                    <div class="info-box red">{{ $property->location }}</div>
                    <div class="info-box red">{{ $property->type }}</div>
                    <div class="info-box gold">{{ $property->total_units }}</div>
                </div>

                <!-- Image Slider -->
                @if($property->images->count() > 0)
                <div class="image-slider">
                    <div class="slider-container">
                        @foreach($property->images as $imgIndex => $image)
                        <div class="slide {{ $imgIndex === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $image->image_path) }}" 
                                alt="{{ $property->name }}" 
                                {{ $imgIndex > 0 ? 'loading=lazy' : '' }}>
                            @if($image->description)
                            <div class="slide-info">
                                <p>{{ $image->description }}</p>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>

                    @if($property->images->count() > 1)
                    <button class="slider-btn prev-btn" type="button" aria-label="Slide sebelumnya">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn next-btn" type="button" aria-label="Slide berikutnya">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <div class="slider-dots">
                        @foreach($property->images as $dotIndex => $image)
                        <button class="dot {{ $dotIndex === 0 ? 'active' : '' }}" type="button" aria-label="Buka slide {{ $dotIndex + 1 }}"></button>
                        @endforeach
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </section>

        <!-- Fasilitas Section -->
        @if($property->facilities->count() > 0)
        <section id="{{ $index === 0 ? 'fasilitas' : 'fasilitas-' . ($index + 1) }}" class="fasilitas">
            <div class="container">
                <h2>FASILITAS</h2>
                <div class="fasilitas-grid">
                    @foreach($property->facilities as $facility)
                    <div class="fasilitas-item">
                        <i class="{{ $facility->icon }}"></i>
                        <p>{{ $facility->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        <!-- Lokasi Section -->
        @if($property->strategicLocations->count() > 0)
        <section id="{{ $index === 0 ? 'lokasi' : 'lokasi-' . ($index + 1) }}" class="lokasi">
            <div class="container">
                <h2>LOKASI STRATEGIS</h2>
                <ul class="lokasi-list">
                    @foreach($property->strategicLocations as $location)
                    <li><i class="fas fa-arrow-right"></i> {{ $location->description }}</li>
                    @endforeach
                </ul>
                @php
                    $waMessage = $property->whatsapp_message ?? "Halo, saya tertarik dengan unit di {$property->name}";
                    $waLink = "https://wa.me/{$property->whatsapp_number}?text=" . urlencode($waMessage);
                @endphp
                <a href="{{ $waLink }}" class="btn-wa" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i> Berminat terhadap unit ini
                </a>
            </div>
        </section>
        @endif
    </div>
    <!-- End Property Group {{ $index + 1 }} -->
    @endforeach

    <!-- Testimoni Section -->
    @if($settings && $settings->testimonial_youtube_url)
    <section id="testimoni" class="testimoni">
        <div class="container">
            <h2>{{ $settings->testimonial_title ?? 'TESTIMONI MEREKA' }}</h2>
            <div class="video-container">
                <iframe width="560" height="315"
                    src="{{ $settings->testimonial_youtube_url }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    @endif

    <!-- Footer dengan Kontak -->
    <footer id="kontak" class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="footer-col">
                    @if($settings && $settings->logo_path)
                        <img src="{{ asset('storage/' . $settings->logo_path) }}" alt="Logo Fachri Property Group" class="footer-logo-img">
                    @else
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Fachri Property Group" class="footer-logo-img">
                    @endif
                    <p class="footer-desc">
                        {{ $settings->company_description ?? 'Fachri Property Group adalah pengembang properti terpercaya yang menyediakan hunian berkualitas di lokasi strategis untuk keluarga Indonesia.' }}
                    </p>
                </div>

                <!-- Kolom 2: Alamat & Kontak -->
                <div class="footer-col">
                    <h3>Hubungi Kami</h3>

                    <div class="contact-item-footer">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            {!! nl2br(e($settings->office_address ?? "Jl. Ampera No.22, RT.003/RW.015\nKel. Sei Raya, Kec. Pontianak Kota\nKalimantan Barat 78113")) !!}
                        </div>
                    </div>

                    <div class="contact-item-footer">
                        <i class="fas fa-phone-alt"></i>
                        <p>{{ $settings->phone_number ?? '0561-817-7746' }}</p>
                    </div>

                    <div class="contact-item-footer">
                        <i class="fas fa-envelope"></i>
                        <p>{{ $settings->email ?? 'fachri@gmail.com' }}</p>
                    </div>
                </div>

                <!-- Kolom 3: Tautan Cepat -->
                <div class="footer-col footer-col-links">
                    <h3>Tautan Cepat</h3>
                    <ul class="footer-links-list">
                        @foreach($properties as $index => $property)
                        <li><a href="#{{ $index === 0 ? 'home' : 'home-' . ($index + 1) }}">{{ $property->name }}</a></li>
                        @endforeach
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
    @if($settings && $settings->whatsapp_float)
    <a href="https://wa.me/{{ $settings->whatsapp_float }}?text=Halo,%20saya%20ingin%20bertanya%20tentang%20perumahan%20Fachri%20Property%20Group."
        class="wa-float" target="_blank" rel="noopener noreferrer" aria-label="Hubungi melalui WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    @endif

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>