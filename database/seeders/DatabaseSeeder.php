<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Projects
        \App\Models\Project::create([
            'title' => 'Dashboard Kepri BPS',
            'description' => 'Membangun sistem indikator ekonomi strategis Kepulauan Riau dari nol. Selesai lebih cepat dari jadwal dan direview langsung oleh Kepala BPS Kepri, BPS RI, dan Menteri Dalam Negeri untuk persiapan Sensus Ekonomi 2026.',
            'tags' => 'HTML5, CSS3, JavaScript, CodeIgniter',
            'image_url' => null,
            'project_url' => null,
            'github_url' => 'https://github.com/Imaf1sh'
        ]);

        \App\Models\Project::create([
            'title' => 'Smart Task',
            'description' => 'Mengembangkan backend performa tinggi dengan bahasa Go yang terintegrasi secara mulus dengan frontend mobile Flutter. (Dalam Pengembangan / In Progress)',
            'tags' => 'Go, PostgreSQL, Redis, Firebase, Flutter',
            'image_url' => null,
            'project_url' => null,
            'github_url' => 'https://github.com/Imaf1sh'
        ]);

        \App\Models\Project::create([
            'title' => 'Dashboard Tanjak SAKERNAS',
            'description' => 'Mendesain dashboard pasar tenaga kerja BPS interaktif terintegrasi dengan Google Looker Studio yang memiliki tampilan Glassmorphism, menyajikan data ribuan responden menjadi informasi ringkas bagi pengambil keputusan.',
            'tags' => 'Looker Studio, HTML5, CSS3, JavaScript',
            'image_url' => null,
            'project_url' => null,
            'github_url' => 'https://github.com/Imaf1sh'
        ]);

        // Seed Experiences
        \App\Models\Experience::create([
            'title' => 'IT Web Developer & Data Analyst (Internship)',
            'organization' => 'BPS Provinsi Kepulauan Riau',
            'period' => 'Jan 2026 – Mar 2026',
            'description' => 'Membangun Dashboard BPS Kepri dari nol, selesai lebih cepat dari jadwal. Dashboard dipresentasikan langsung di hadapan Kepala BPS Kepri, BPS RI, dan Menteri Dalam Negeri. Mendesain Dashboard SAKERNAS Tanjak terintegrasi Google Looker Studio untuk visualisasi pasar kerja dari ribuan responden.',
            'type' => 'work'
        ]);

        \App\Models\Experience::create([
            'title' => 'IT Web Developer (Internship)',
            'organization' => 'PT Tunas Idea Indonesia',
            'period' => 'Jan 2022 – Jun 2022',
            'description' => 'Magang kerja IT Web Developer, mempelajari pengembangan sistem web terstruktur dan fungsional sesuai standar industri.',
            'type' => 'work'
        ]);

        \App\Models\Experience::create([
            'title' => 'Bachelor of Science in Computer Science',
            'organization' => 'Universitas Maritim Raja Ali Haji (UMRAH)',
            'period' => '2023 – Sekarang',
            'description' => 'Fokus pada Software Development & Data Analytics. Indeks Prestasi Kumulatif (IPK) saat ini: 3.43 / 4.00.',
            'type' => 'education'
        ]);

        \App\Models\Experience::create([
            'title' => 'Rekayasa Perangkat Lunak (RPL)',
            'organization' => 'SMKN 1 Bintan Timur',
            'period' => '2020 – 2023',
            'description' => 'Mempelajari dasar-dasar pemrograman, basis data, dan pengembangan aplikasi. Lulus dengan Rata-rata Nilai: 87.68.',
            'type' => 'education'
        ]);
    }
}
