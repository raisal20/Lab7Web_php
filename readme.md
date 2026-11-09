# Laporan Praktikum 7 — Pemrograman Server-Side dengan PHP

**Mata Kuliah:** Pemrograman Web  
**Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom

---

### Identitas Mahasiswa:

- **Nama:** Raisyal Fauzi Ghazali
- **NIM:** 312510279
- **Kelas:** 1251C
- **Program Studi:** Teknik Informatika
- **Fakultas:** Teknik
- **Universitas:** Universitas Pelita Bangsa

---

## 1. Tujuan Praktikum

- Memahami perbedaan pemrosesan _client-side_ dan _server-side_.
- Mengenali sintaks dasar PHP dan menjalankan file PHP melalui web server lokal[cite: 3].
- Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan fungsi (_function_) di PHP[cite: 3, 4].
- Menerima dan memproses data dari _form_ HTML menggunakan metode `GET` dan `POST`[cite: 3, 4].
- Melakukan validasi dan sanitasi input sisi server (_server-side validation_) menggunakan fungsi keamanan seperti `htmlspecialchars()`[cite: 3].
- Membangun aplikasi mini project formulir data mahasiswa yang menerima, memproses, serta menampilkan ringkasan data[cite: 3, 5, 6].

## 2. Perangkat yang Digunakan

- Laptop / PC[cite: 3]
- Web Browser (Google Chrome)[cite: 3]
- Visual Studio Code[cite: 3]
- Web Server Lokal (XAMPP / Apache)[cite: 3]

## 3. Cara Menjalankan Server Lokal

1. Buka aplikasi **XAMPP Control Panel**, lalu klik tombol **Start** pada modul **Apache**[cite: 3].
2. Buat folder proyek baru bernama `lab7_php` di dalam direktori penyimpanan server lokal, yaitu `C:\xampp\htdocs\`[cite: 3].
3. Masukkan seluruh file latihan (`latihan1.php` s.d. `latihan7.php`) serta file `miniproject.php` ke dalam folder tersebut[cite: 6].
4. Buka web browser, lalu akses file melalui alamat lokal, misalnya: `http://localhost/lab7_php/latihan1.php`[cite: 3]. Jangan membuka file PHP langsung dengan klik ganda (_double-click_)[cite: 3].

## 4. Struktur File Proyek

```text
lab7_php/
├── latihan1.php
├── latihan2.php
├── latihan3.php
├── latihan4.php
├── latihan5.php
├── latihan6.php
├── latihan7.php
├── eksperimen1.php
├── eksperimen2.php
├── eksperimen3.php
├── eksperimen4.php
├── eksperimen5.php
├── miniproject.php
└── README.md
```
