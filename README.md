# Website Portofolio Personal - Oktaviandra Wahyuramadhan

Website portofolio personal yang didesain secara modern, premium, dan minimalis untuk memamerkan proyek, perjalanan karier, dan keahlian di bidang pengembangan perangkat lunak (*Software Development*). 

Dibuat menggunakan teknologi web murni (**HTML5**, **CSS3**, dan **JavaScript**) tanpa framework berat, memastikan performa pemuatan yang instan dan kompatibilitas penuh dengan layanan hosting serverless seperti **Vercel**, **GitHub Pages**, dan **Netlify**.

## 🎨 Desain & Estetika
* **Tema Warna**: Dominasi Pitch Black (`#05070c`) dipadukan dengan aksen Navy Blue (`#1d3b73`) dan efek pancaran lampu neon elektrik-biru (`#3b82f6`) untuk tampilan gelap modern (*dark mode*).
* **Tipografi**: Menggunakan font *Outfit* (untuk judul/heading) dan *Inter* (untuk teks tubuh/body) yang diambil secara langsung melalui Google Fonts.
* **Efek & Transisi**: Mengintegrasikan efek *Glassmorphism* (kartu semi-transparan dengan blur latar belakang), gradasi linier dinamis, micro-animations pada hover, dan rotasi dekoratif background halo di bagian foto profil.

## 🚀 Fitur Utama
1. **Hero Section**: Kolom split-screen (foto di kiri dengan pancaran halo, konten teks di kanan) dilengkapi animasi teks slide dari kiri ke kanan yang berganti kata secara otomatis.
2. **Tentang Saya & Keahlian**: Ringkasan profil profesional beserta grid kartu keahlian terstruktur (Backend, Frontend, dan DevOps/Data).
3. **Proyek Terpilih**: Daftar baris horizontal proyek dengan label tag teknologi, deskripsi detail, serta tautan ke repositori GitHub.
4. **Timeline Pengalaman & Pendidikan**: Tab interaktif untuk berpindah antara riwayat pekerjaan (*Work Experience*) dan riwayat akademis (*Education*) dengan garis waktu vertikal yang mulus.
5. **Formulir Kontak Responsif**: Dilengkapi validasi form instan di sisi client (regex email, karakter minimal pesan) serta animasi pemrosesan (*loading spinner*) 1 detik sebelum menampilkan notifikasi sukses.

## 🛠️ Tech Stack
* **Struktur**: HTML5 (Semantic Elements)
* **Gaya & Layout**: Vanilla CSS3 (Flexbox, Grid, Custom Properties/Variables)
* **Interaktivitas**: Vanilla JavaScript (ES6, AJAX simulation, Event Listeners)
* **Ikon**: FontAwesome v6 (melalui CDN)

## 💻 Cara Menjalankan Secara Lokal
Karena proyek ini berbasis web statis, Anda tidak memerlukan proses kompilasi (*build*), instalasi package node, atau database lokal. 

Cukup buka file `index.html` langsung di browser Anda, atau jalankan menggunakan server HTTP sederhana:

**Menggunakan Python:**
```bash
python -m http.server 8000
```
Akses di browser melalui: `http://localhost:8000`

**Menggunakan Node.js (npx):**
```bash
npx serve
```

## 🌐 Penyebaran (Deployment)
Proyek ini dirancang agar kompatibel penuh dengan **Vercel** dengan konfigurasi nol (*Zero Config*). Setiap kali Anda melakukan push ke branch utama repositori GitHub Anda, Vercel akan otomatis menyajikan situs web ini sebagai website statis berperforma tinggi secara instan.
