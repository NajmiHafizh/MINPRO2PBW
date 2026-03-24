# MINI PROJECT 2 PEMROGRAMAN BERBASIS WEB

- NAJMI HAFIZH MAULUDAN ZAIN
- 2409116028
- SISTEM INFORMASI A`24

---------------------------------------------------------------------------------------------------------------------------------------

## 1. Tampilan Setiap Section / Fitur

## Tampilan pada section navbar dan home

<img width="1896" height="634" alt="image" src="https://github.com/user-attachments/assets/3b74791b-87d3-4f55-a696-1e04041c7b6a" />

- Navbar berada di bagian paling atas dengan tampilan sederhana dan rapi.
Menggunakan background putih dengan garis bawah tipis sehingga terlihat clean.
Menu navigasi terdiri dari Home, About Me, dan Certificates yang posisinya rata kanan, sehingga mudah diakses oleh pengguna.

- Bagian ini menjadi fokus utama saat pertama kali membuka website. Tampilan dibagi menjadi dua bagian:
Kiri: berisi judul perkenalan dengan ukuran besar, deskripsi singkat, dan tombol aksi
Kanan: berisi foto profil
Desain dibuat seimbang (balanced layout) sehingga tidak berat sebelah.
Tombol “Lihat Selengkapnya” berfungsi sebagai navigasi cepat ke bagian berikutnya.

## Tampilan pada section about me

<img width="1895" height="635" alt="image" src="https://github.com/user-attachments/assets/3b15f8b9-dc9b-4f7d-be4d-65963be14213" />

Bagian ini menampilkan informasi lebih lengkap tentang diri.
Terdiri dari:

- Judul section yang berada di tengah
- Deskripsi singkat yang menjelaskan minat dan bidang yang ditekuni
  
Di bawahnya terdapat skills yang ditampilkan dalam bentuk progress bar.
Progress bar memiliki tampilan:

- Lebih tebal (tidak tipis seperti default)
- Memiliki warna berbeda
- Memiliki efek hover (sedikit membesar dan muncul bayangan)
  
Kemudian terdapat bagian pengalaman dalam bentuk list agar mudah dibaca.

## Tampilan pada section certificates dan footer

<img width="1899" height="519" alt="image" src="https://github.com/user-attachments/assets/a57224e7-0252-472a-a0c4-0cb420b094b3" />

<img width="1919" height="890" alt="image" src="https://github.com/user-attachments/assets/d639ae82-bdd3-485f-9f18-b6602190e2f2" />

Bagian ini menampilkan sertifikat dalam bentuk card layout (grid).
Setiap card berisi:

- Gambar sertifikat
- Judul
- Deskripsi singkat

Tampilan card dibuat rapi dengan jarak antar card yang konsisten.
Saat cursor diarahkan ke card:

- Card akan sedikit terangkat (hover effect)
- Memberikan kesan interaktif

Saat gambar diklik:

- Akan muncul tampilan preview besar (modal) di tengah layar
- Background menjadi lebih gelap sehingga fokus ke gambar

---------------------------------------------------------------------------------------------------------------------------------------
## 2. Penjelasan Code Setiap Section / Fitur

1. Koneksi Database (koneksi.php)

**$conn = mysqli_connect($host, $user, $password, $database);**

Digunakan untuk menghubungkan website ke database MySQL bernama portfolio_db. Data sertifikat akan diambil dari database ini.

2. Navbar

**<nav class="navbar navbar-expand-lg navbar-dark bg-dark">**

Menggunakan Bootstrap untuk membuat navbar responsif.
Class:

- navbar-expand-lg untuk responsive
- ms-auto untuk menu ke kanan

3. Section Home

**<div class="row align-items-center">**

Menggunakan grid Bootstrap:

- col-md-6 kiri untuk teks
- col-md-6 kanan untuk gambar

CSS:

**#home img:hover {
    transform: scale(1.03);
}**

Memberikan efek zoom saat gambar dihover.

4. Section About (Skills)
   
<img width="534" height="81" alt="image" src="https://github.com/user-attachments/assets/16fb139a-857b-4235-b403-61e04f7d2daf" />

Menggunakan komponen Bootstrap Progress Bar.

CSS tambahan:

**.progress:hover {
    transform: scale(1.03);
}**

Memberikan efek “nimbul” saat cursor diarahkan ke bar.

5. Section Certificates (Dinamis dari Database)
   
**$query = mysqli_query($conn, "SELECT * FROM certificates");
while ($row = mysqli_fetch_assoc($query)) {**

Penjelasan:

Data sertifikat diambil dari database
Ditampilkan menggunakan perulangan while
Setiap data dimasukkan ke dalam card
**<img src="<?= $row['image']; ?>">**

Menampilkan gambar dari database.

6. Fitur Modal (Preview Sertifikat)

**<div class="modal fade" id="imageModal">**

Digunakan untuk menampilkan gambar besar saat diklik.

**function showImage(src) {
    document.getElementById("modalImage").src = src;
}**

Penjelasan:

Saat gambar diklik untuk fungsi showImage() dipanggil
Gambar akan ditampilkan di dalam modal

7. Styling (CSS)

Beberapa bagian penting:

Navbar

**.navbar {
    border-bottom: 1px solid #e5e7eb;
}**

Card Hover

**.card:hover {
    transform: translateY(-6px);
}**

Progress Bar

**.progress {
    height: 14px;
}**

Smooth Scroll

**html {
    scroll-behavior: smooth;
}**

---------------------------------------------------------------------------------------------------------------------------------------

## 3. Teknologi yang Digunakan

1. HTML

Digunakan untuk membuat struktur utama website seperti navbar, section, card, dan footer.

2. CSS

Digunakan untuk mengatur tampilan seperti:

Warna
Font
Layout
Animasi hover
Spacing

3. Bootstrap 5

Digunakan untuk mempercepat pembuatan tampilan:

Grid system (row, col-md)
Navbar
Card
Progress bar
Modal

4. PHP

Digunakan untuk:

Menghubungkan ke database
Mengambil data sertifikat
Menampilkan data secara dinamis

5. MySQL

Digunakan sebagai database untuk menyimpan data sertifikat:

Judul
Deskripsi
Gambar

6. JavaScript

Digunakan untuk interaksi:

Menampilkan gambar sertifikat ke modal
