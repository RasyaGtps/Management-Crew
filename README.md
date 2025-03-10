# 🚀 Management Crew

![Management Crew Banner](https://via.placeholder.com/1200x300/1a1a1a/3b82f6?text=Management+Crew)

Management Crew adalah platform manajemen tim modern yang dirancang untuk membantu organisasi mengelola tim mereka dengan lebih efektif. Dengan antarmuka yang intuitif dan fitur-fitur canggih, Management Crew memudahkan kolaborasi dan meningkatkan produktivitas tim Anda.

## ✨ Fitur Utama

- 📊 **Dashboard Intuitif**
  - Pantau kinerja tim secara real-time
  - Visualisasi data yang informatif
  - Metrik dan KPI yang dapat disesuaikan

- 👥 **Manajemen Tim**
  - Kelola anggota tim dengan mudah
  - Atur peran dan izin
  - Struktur organisasi yang fleksibel

- 📅 **Manajemen Proyek**
  - Buat dan kelola proyek
  - Timeline dan milestone
  - Pelacakan progres otomatis

- 💬 **Kolaborasi**
  - Chat tim terintegrasi
  - Berbagi file dan dokumen
  - Ruang diskusi proyek

- 📈 **Laporan & Analitik**
  - Laporan kinerja tim
  - Analisis produktivitas
  - Export data dalam berbagai format

## 🛠️ Teknologi

- **Frontend:** Laravel Blade, TailwindCSS
- **Backend:** Laravel 10
- **Database:** MySQL
- **Authentication:** Laravel Breeze
- **Icons:** Heroicons

## 📦 Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/rasyagtps/management-crew.git
   cd management-crew
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   - Buat database baru
   - Update konfigurasi database di file `.env`
   ```env
   DB_DATABASE=management_crew
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Migrasi Database**
   ```bash
   php artisan migrate
   ```

6. **Compile Assets**
   ```bash
   npm run dev
   ```

7. **Jalankan Server**
   ```bash
   php artisan serve
   ```

## 📚 Dokumentasi

Dokumentasi lengkap tersedia di [docs.managementcrew.com](https://docs.managementcrew.com)

### Struktur Proyek

```
management-crew/
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   └── web.php
└── ...
```

### Halaman Utama

- **Welcome** - Landing page utama
- **Features** - Daftar fitur lengkap
- **Pricing** - Paket dan harga
- **Tutorial** - Panduan penggunaan
- **Updates** - Pembaruan dan changelog
- **About** - Tentang perusahaan
- **Career** - Lowongan kerja
- **Blog** - Artikel dan berita
- **Press Kit** - Sumber daya media

## 🤝 Kontribusi

Kami sangat menghargai kontribusi dari komunitas! Jika Anda ingin berkontribusi:

1. Fork repository
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 Lisensi

Dilindungi di bawah lisensi MIT. Lihat `LICENSE` untuk informasi lebih lanjut.

## 📞 Kontak

- Website: [managementcrew.com](https://managementcrew.com)
- Email: contact@mc.com
- Phone: +62 123 4567 890

## 🌟 Tim

- **Ahmad Rizki** - CEO & Founder
- **Sarah Diana** - CTO
- **Rudi Hartono** - COO

---

<p align="center">Made with ❤️ by Management Crew Team</p>
