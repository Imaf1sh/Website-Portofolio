@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container hero-container">
        <div class="hero-image-container">
            <div class="profile-photo-wrapper">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo" id="hero-profile-image">
                <div class="photo-glow-effect"></div>
            </div>
            <!-- Glowing decorative element behind photo -->
            <div class="hero-visual">
                <div class="geometric-shape">
                    <div class="inner-circle"></div>
                </div>
            </div>
        </div>
        <div class="hero-content">
            <span class="hero-welcome">Selamat Datang di Portofolio Saya</span>
            <h1 class="hero-title">
                Hi, Saya <span class="highlight">Oktaviandra</span><br>
                yang Fokus pada <div class="slide-text-container"><span id="slide-text" class="navy-glow slide-text"></span></div>
            </h1>
            <p class="hero-subtitle">
                Full-Stack Developer yang berdedikasi membangun produk digital fungsional, cepat, dan berdampak nyata bagi instansi pemerintah serta bisnis.
            </p>
            <div class="hero-actions">
                <a href="#projects" class="btn btn-primary" id="hero-view-projects">Lihat Proyek <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#contact" class="btn btn-secondary" id="hero-contact-me">Hubungi Saya</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="section-header center-align">
            <span class="section-tag">01. Tentang Saya</span>
            <h2 class="section-title">Membuat Solusi Digital Melalui Kode</h2>
        </div>
        
        <div class="about-wrapper">
            <div class="about-text-center">
                <p>
                    Saya adalah seorang <strong>Full-Stack Developer</strong> dengan rekam jejak terbukti sejak 2022 dalam mengembangkan sistem yang aktif digunakan di dunia nyata, bukan sekadar untuk pajangan portofolio.
                </p>
                <p>
                    Produk yang saya buat aktif digunakan oleh instansi pemerintah (<strong>BPS Kepulauan Riau</strong>) untuk mendukung kelancaran Sensus Ekonomi 2026. Proyek tersebut berhasil diselesaikan lebih cepat dari tenggat waktu dan mendapat apresiasi langsung dari pimpinan.
                </p>
                <p>
                    Saat ini saya sedang menempuh pendidikan Sarjana Ilmu Komputer di Universitas Maritim Raja Ali Haji (UMRAH) dengan IPK 3.43. Saya menguasai frontend (React, Vue, Next.js), backend (Node.js, PHP, Go), serta analisis data terintegrasi Looker Studio.
                </p>
            </div>
            
            <div class="skills-section-center">
                <h3 class="skills-title-center">Keahlian & Teknologi</h3>
                <div class="skills-columns">
                    <div class="skill-card-column" id="skill-col-backend">
                        <div class="skill-card-header-icon"><i class="fa-solid fa-server"></i></div>
                        <h4>Backend & DB</h4>
                        <div class="skill-badges">
                            <span class="badge" id="skill-nodejs">Node.js</span>
                            <span class="badge" id="skill-php">PHP (Laravel/CI)</span>
                            <span class="badge" id="skill-go">Go (Golang)</span>
                            <span class="badge" id="skill-python">Python</span>
                            <span class="badge" id="skill-postgres">PostgreSQL</span>
                            <span class="badge" id="skill-mysql">MySQL</span>
                        </div>
                    </div>
                    <div class="skill-card-column" id="skill-col-frontend">
                        <div class="skill-card-header-icon"><i class="fa-solid fa-code"></i></div>
                        <h4>Frontend</h4>
                        <div class="skill-badges">
                            <span class="badge" id="skill-react">React</span>
                            <span class="badge" id="skill-vue">Vue.js</span>
                            <span class="badge" id="skill-next">Next.js</span>
                            <span class="badge" id="skill-html">HTML5/CSS3</span>
                        </div>
                    </div>
                    <div class="skill-card-column" id="skill-col-tools">
                        <div class="skill-card-header-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <h4>DevOps & Data</h4>
                        <div class="skill-badges">
                            <span class="badge" id="skill-looker">Looker Studio</span>
                            <span class="badge" id="skill-metabase">Metabase</span>
                            <span class="badge" id="skill-git">Git/GitHub</span>
                            <span class="badge" id="skill-figma">Figma</span>
                            <span class="badge" id="skill-firebase">Firebase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section">
    <div class="container">
        <div class="section-header center-align">
            <span class="section-tag">02. Proyek Terpilih</span>
            <h2 class="section-title">Hasil Karya & Kontribusi</h2>
        </div>

        <div class="projects-list-container">
            @forelse($projects as $project)
                <div class="project-list-row" id="project-row-{{ $project->id }}">
                    <div class="project-row-left">
                        <h3 class="project-row-title">{{ $project->title }}</h3>
                        <div class="project-row-tags">
                            @foreach(explode(',', $project->tags) as $tag)
                                <span class="project-tag-badge">{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="project-row-center">
                        <p class="project-row-description">{{ $project->description }}</p>
                    </div>
                    <div class="project-row-right">
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="project-row-link" aria-label="GitHub Repository" id="project-github-{{ $project->id }}"><i class="fa-brands fa-github"></i> Info/Repo</a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="no-data">
                    <p>Belum ada proyek yang ditambahkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience-section">
    <div class="container">
        <div class="section-header center-align">
            <span class="section-tag">03. Perjalanan Karier</span>
            <h2 class="section-title">Pengalaman & Pendidikan</h2>
        </div>

        <div class="experience-tabs-wrapper">
            <div class="experience-tab-buttons" id="exp-tab-buttons-container">
                <button class="tab-btn active" data-tab="work-tab" id="tab-btn-work"><i class="fa-solid fa-briefcase"></i> Pengalaman Kerja</button>
                <button class="tab-btn" data-tab="education-tab" id="tab-btn-edu"><i class="fa-solid fa-graduation-cap"></i> Pendidikan</button>
            </div>

            <div class="experience-tab-contents">
                <!-- Work Tab Content -->
                <div class="tab-content-panel active" id="work-tab">
                    <div class="timeline">
                        @forelse($workExperiences as $work)
                            <div class="timeline-item" id="work-{{ $work->id }}">
                                <div class="timeline-dot"></div>
                                <span class="timeline-date">{{ $work->period }}</span>
                                <h4 class="timeline-role">{{ $work->title }}</h4>
                                <h5 class="timeline-org">{{ $work->organization }}</h5>
                                <p class="timeline-desc">{{ $work->description }}</p>
                            </div>
                        @empty
                            <div class="no-data-timeline">
                                <p>Belum ada riwayat kerja.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Education Tab Content -->
                <div class="tab-content-panel" id="education-tab">
                    <div class="timeline">
                        @forelse($educationExperiences as $edu)
                            <div class="timeline-item" id="edu-{{ $edu->id }}">
                                <div class="timeline-dot"></div>
                                <span class="timeline-date">{{ $edu->period }}</span>
                                <h4 class="timeline-role">{{ $edu->title }}</h4>
                                <h5 class="timeline-org">{{ $edu->organization }}</h5>
                                <p class="timeline-desc">{{ $edu->description }}</p>
                            </div>
                        @empty
                            <div class="no-data-timeline">
                                <p>Belum ada riwayat pendidikan.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header center-align">
            <span class="section-tag">04. Hubungi Saya</span>
            <h2 class="section-title">Mulai Obrolan Baru</h2>
            <p class="section-subtitle">Punya proyek menarik atau ingin berdiskusi? Kirimkan pesan Anda melalui formulir di bawah ini.</p>
        </div>

        <!-- Horizontal Contact Info list above form -->
        <div class="contact-info-horizontal">
            <div class="info-card">
                <div class="info-card-icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="info-card-text">
                    <span>Email</span>
                    <strong>oktaviandrawahyuramadhan@gmail.com</strong>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="info-card-text">
                    <span>Telepon / WA</span>
                    <strong>083148796357</strong>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="info-card-text">
                    <span>Lokasi</span>
                    <strong>Bintan Timur, Kepulauan Riau</strong>
                </div>
            </div>
        </div>

        <div class="contact-centered-container">
            <!-- Contact Form Card -->
            <div class="contact-form-card">
                <form id="portfolio-contact-form" action="{{ route('portfolio.contact') }}" method="POST">
                    @csrf
                    <!-- Alert Notification -->
                    <div id="contact-alert" class="alert hidden">
                        <span class="alert-message"></span>
                        <button type="button" class="alert-close-btn" id="alert-close-btn">&times;</button>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nama Lengkap <span class="required-star">*</span></label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                            <span class="error-msg" id="error-name"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email <span class="required-star">*</span></label>
                            <input type="email" id="email" name="email" placeholder="johndoe@example.com" required>
                            <span class="error-msg" id="error-email"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" placeholder="Diskusi Kerjasama">
                        <span class="error-msg" id="error-subject"></span>
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan Anda <span class="required-star">*</span></label>
                        <textarea id="message" name="message" rows="5" placeholder="Tuliskan pesan detail Anda di sini..." required></textarea>
                        <span class="error-msg" id="error-message"></span>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" id="contact-submit-btn">
                        <span class="btn-text">Kirim Pesan</span>
                        <span class="loading-spinner hidden"><i class="fa-solid fa-circle-notch fa-spin"></i> Mengirim...</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
