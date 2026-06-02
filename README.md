# Facility & Maintenance Management System

Sistem Manajemen Fasilitas & Pemeliharaan (Facility & Maintenance Management System) adalah platform terintegrasi yang dirancang untuk mengelola, melacak, dan memelihara seluruh aset serta fasilitas operasional secara efisien. Sistem ini mencakup pengelolaan data master aset, sistem pelabelan fisik menggunakan QR Code, pelaporan kendala (issue reporting), hingga manajemen perintah kerja (work order) dan pelaporan berkala.

## Fitur Utama & Arsitektur Halaman

Sistem ini terdiri dari beberapa halaman dan modul utama yang saling terintegrasi:

### 1. Manajemen Aset & Pelabelan (Asset & QR Management)
* **Halaman Dashboard Aset:** Antarmuka pusat untuk memantau status, kondisi, dan sebaran seluruh aset secara *real-time*.
* **Form Input Aset & Detail Spesifikasi:** Digunakan untuk mencatat aset baru serta melihat informasi riwayat, spesifikasi teknis, dan dokumen pendukung dari setiap fasilitas.
* **Modul Cetak QR Code:** Fitur generator untuk mencetak label QR Code fisik yang akan ditempelkan pada aset guna mempermudah proses pelacakan.
* **Kamera Pemindai QR:** Modul berbasis perangkat bergerak (mobile-friendly) yang memungkinkan staf di lapangan memindai QR Code aset untuk langsung melihat detail spesifikasi secara cepat.

### 2. Pelaporan & Manajemen Kendala (Ticketing & Issue Reporting)
* **Form Pengaduan Kerusakan Fasilitas:** Fasilitas bagi pengguna atau staf untuk melaporkan kerusakan atau malafungsi yang ditemukan pada area kerja/mall.
* **Form Pembuatan Laporan & Pengubahan Status:** Halaman kontrol untuk memperbarui progres perbaikan (misalnya: *Pending*, *In Progress*, *Resolved*).

### 3. Eksekusi & Pemeliharaan (Maintenance & Work Order)
* **Form Pembuatan Work Order:** Antarmuka untuk membuat dan mendistribusikan surat perintah kerja digital kepada teknisi atau tim pemeliharaan terkait.
* **Halaman Laporan Akhir Bulan:** Modul analitik untuk rekapitulasi performa pemeliharaan, durasi perbaikan, serta statistik kerusakan sepanjang bulan berjalan sebagai bahan evaluasi manajemen.

## Teknologi yang Digunakan (Tech Stack)
*(Silakan sesuaikan bagian ini dengan teknologi yang Anda gunakan)*
* **Backend:** [Contoh: Node.js / Laravel / Go]
* **Frontend:** [Contoh: React.js / Vue.js / Blade]
* **Mobile (Scanner):** [Contoh: React Native / Flutter / Native Android-iOS]
* **Database:** [Contoh: PostgreSQL / MySQL]

## Alur Kerja Sistem (Workflow)
1. **Registrasi & Pelabelan:** Aset baru diinput -> QR Code dicetak -> QR Code ditempel pada fisik aset.
2. **Pelaporan Masalah:** Staf memindai QR untuk memeriksa spesifikasi atau langsung mengisi Form Pengaduan Kerusakan jika ditemukan masalah.
3. **Penyelesaian Masalah:** Admin menerbitkan *Work Order* -> Teknisi melakukan perbaikan -> Status diperbarui hingga selesai.
4. **Pelaporan:** Semua aktivitas pemeliharaan dirangkum otomatis dalam Halaman Laporan Akhir Bulan.
