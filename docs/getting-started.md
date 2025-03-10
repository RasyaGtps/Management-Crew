# 🚀 Memulai dengan Management Crew

Panduan ini akan membantu Anda memulai dengan Management Crew, dari instalasi hingga penggunaan dasar.

## 📋 Prasyarat

Sebelum memulai, pastikan sistem Anda memenuhi persyaratan berikut:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL >= 5.7
- Git

## 🔧 Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/rasyagtps/management-crew.git
   cd management-crew
   ```

2. **Install Dependencies PHP**
   ```bash
   composer install
   ```

3. **Install Dependencies JavaScript**
   ```bash
   npm install
   ```

4. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi Database**
   
   Buka file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=management_crew
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Migrasi Database**
   ```bash
   php artisan migrate
   ```

7. **Compile Assets**
   ```bash
   npm run dev
   ```

8. **Jalankan Server**
   ```bash
   php artisan serve
   ```

   Server akan berjalan di `http://localhost:8000`

## 🎯 Penggunaan Dasar

### 1. Registrasi & Login

- Kunjungi `http://localhost:8000/register` untuk membuat akun baru
- Isi formulir registrasi dengan data yang diperlukan
- Setelah registrasi, Anda akan diarahkan ke halaman login
- Masuk menggunakan email dan password yang telah didaftarkan

### 2. Dashboard

Setelah login, Anda akan melihat dashboard dengan beberapa fitur utama:

- **Overview**: Ringkasan aktivitas tim
- **Projects**: Daftar proyek aktif
- **Team**: Manajemen anggota tim
- **Tasks**: Daftar tugas dan status
- **Reports**: Laporan dan analitik

### 3. Manajemen Tim

#### Menambah Anggota Tim
1. Klik menu "Team"
2. Klik tombol "Add Member"
3. Isi formulir dengan data anggota
4. Pilih peran dan izin
5. Klik "Save" untuk menyimpan

#### Mengatur Peran
1. Klik menu "Team"
2. Pilih anggota yang ingin diubah
3. Klik "Edit Role"
4. Pilih peran baru
5. Klik "Update" untuk menyimpan

### 4. Manajemen Proyek

#### Membuat Proyek Baru
1. Klik menu "Projects"
2. Klik tombol "New Project"
3. Isi detail proyek:
   - Nama proyek
   - Deskripsi
   - Tanggal mulai dan selesai
   - Tim proyek
4. Klik "Create Project"

#### Mengelola Tasks
1. Buka proyek yang diinginkan
2. Klik tab "Tasks"
3. Klik "Add Task" untuk membuat tugas baru
4. Isi detail tugas:
   - Judul
   - Deskripsi
   - Assignee
   - Due date
   - Priority
5. Klik "Save Task"

## 🔍 Troubleshooting

### Masalah Umum

1. **Error: Connection refused**
   - Pastikan MySQL server berjalan
   - Periksa konfigurasi database di `.env`

2. **Error: npm not found**
   - Install Node.js dan NPM
   - Restart terminal

3. **Error: Class not found**
   ```bash
   composer dump-autoload
   ```

4. **Error: Permission denied**
   ```bash
   chmod -R 777 storage bootstrap/cache
   ```

### Bantuan Lebih Lanjut

Jika Anda mengalami masalah lain:

1. Periksa log error di `storage/logs/laravel.log`
2. Hubungi tim support di contact@mc.com
3. Buat issue di GitHub repository

## 📚 Referensi

- [Laravel Documentation](https://laravel.com/docs)
- [TailwindCSS Documentation](https://tailwindcss.com/docs)
- [MySQL Documentation](https://dev.mysql.com/doc/) 