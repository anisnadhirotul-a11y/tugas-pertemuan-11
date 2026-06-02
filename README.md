# Mini Project Laravel - Sistem Informasi Perpustakaan

## Data Mahasiswa

**Nama:** Anis Nadhirotul Mustafida  
**NIM:** 60324043  
**Mata Kuliah:** Pemrograman Web 2  
**Pertemuan:** 11

---

## Deskripsi Proyek

Proyek ini merupakan implementasi framework Laravel untuk membangun sistem informasi perpustakaan sederhana. Pada pertemuan ini fokus pengembangan dilakukan pada pembuatan halaman dashboard serta manajemen data buku dengan tampilan yang lebih interaktif menggunakan Blade Template dan Bootstrap.

---

## Fitur yang Dikerjakan

### 1. Dashboard Perpustakaan

Halaman dashboard berfungsi untuk menampilkan ringkasan informasi penting yang ada pada sistem, meliputi:

- Total seluruh buku
- Jumlah buku yang masih tersedia
- Jumlah buku yang stoknya habis
- Total anggota perpustakaan
- Jumlah anggota aktif
- Jumlah anggota nonaktif
- Daftar 5 buku terbaru
- Daftar 5 anggota terbaru
- Menu navigasi cepat ke halaman utama

---

### 2. Daftar Buku

Fitur daftar buku menampilkan seluruh koleksi buku yang tersimpan dalam database.

Informasi yang ditampilkan:

- Kode Buku
- Judul Buku
- Nama Pengarang
- Harga Buku
- Kategori
- Status Ketersediaan
- Jumlah Stok

Selain itu tersedia tombol aksi:

- Detail Buku
- Edit Buku

---

### 3. Filter dan Pencarian Buku

Fitur pencarian dibuat untuk mempermudah pengguna menemukan buku yang dibutuhkan.

Filter yang tersedia:

- Pencarian berdasarkan kata kunci
- Filter kategori buku
- Filter tahun terbit
- Filter status ketersediaan buku

Pencarian dapat dilakukan berdasarkan:

- Judul buku
- Nama pengarang
- Nama penerbit

---

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Bootstrap 5
- Blade Template Engine

---

## Struktur Halaman

### Dashboard
URL:

```text
/dashboard
```

### Daftar Buku
URL:

```text
/buku
```

### Pencarian Buku
URL:

```text
/buku/search
```

---

## Screenshot

Tambahkan screenshot berikut pada repository GitHub:

1. Dashboard Perpustakaan
   <img width="1600" height="707" alt="dashboad" src="https://github.com/user-attachments/assets/34147515-cc81-4d6b-96af-57c516e41ddd" />

3. Halaman Daftar 
<img width="1600" height="686" alt="daftar buku" src="https://github.com/user-attachments/assets/1590c3f8-c6da-4a65-a9bd-cf65b7065879" />

4. Hasil Filter Kategori
   <img width="1600" height="707" alt="search filter buku" src="https://github.com/user-attachments/assets/2ba9d104-4de1-4ef2-b9dc-04e6fdde845d" />

---

## Hasil

Seluruh fitur pada tugas pertemuan 11 berhasil dijalankan dengan baik, meliputi:

✅ Dashboard statistik perpustakaan  
✅ Daftar buku dengan tampilan card  
✅ Filter kategori buku  
✅ Status stok buku  
✅ Blade Component Buku Card  
✅ Fitur pencarian dan filter buku

---

**Universitas Islam Negeri K.H. Abdurrahman Wahid Pekalongan**  
**Program Studi Informatika**
