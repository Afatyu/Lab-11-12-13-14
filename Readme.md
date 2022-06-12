# Praktikum 11 - Pemrograman Web (PHP Framework)

```
Ananda Fatah - 312010186
TI.20.A.1
```

## Laporan Praktikum
### Persiapan
Mengaktifkan beberapa ekstensi php, diantaranya:
- php-json ekstension untuk bekerja dengan JSON;
- php-mysqlnd native driver untuk MySQL;
- php-xml ekstension untuk bekerja dengan XML;
- php-intl ekstensi untuk membuat aplikasi multibahasa;
- libcurl (opsional), jika ingin pakai Curl</br>

Hapus tanda ; (titik koma) pada bagian extension yang akan diaktifkan.

## Instalasi CodeIgniter 4
- Codeigniter dapat didownload dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

<br>Codeigniter menyediakan CLI, untuk mengaksesnya buka terminal lalu arahkan ke direktori project yang akan dibuat. Kemudian jalankan perintah `php spark` untuk memanggil CLI codeigniter.

<br>Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file `env` menjadi `.env` kemudian buka filenya dan ubah nilai <b>CI_ENVIRONMENT</b> menjadi <b>development</b>.

<br>Maka pesan kesalahan akan ditampilkan.

### Langkah 1 - Membuat Route
- Router terletak pada file app/config/Routes.php
- Untuk mengetahui route yg ada atau telah berjalan dapat menggunakan perintah `php spark routes`

- Selanjutnya mencoba akses route yang telah dibuat dengan mengakses 
http://localhost:8080/contact
- Terjadi error file not found dikarenakan tidak ada file/page untuk halaman contact.

### Langkah 2 - Membuat Controller
- Membuat file <b>page.php</b> di dalam direktori Controller (/app/Controllers)

- Kemudian refresh browser maka halaman sudah dapat diakses dan menampilkan hasilnya.

- Menambahkan method baru pada controller page.
- Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos

### Langkah 3 - Membuat View
- Membuat file <b>about.php</b> di dalam direktori View (/app/view/about.php)

- Mengubah method about dalam controller page.

### Langkah 4 - Membuat Layout Web dengan CSS
- Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout).

- Kemudian buat folder template pada direktori view, lalu buat file <b>header.php</b> dan <b>footer.php</b>.

- Kemudian ubah file about.php (/app/view/about.php) seperti berikut.
```
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```

- Kemudian refresh browser atau akses alamat http://localhost:8080/about




</br>

# Praktikum 12 - Pemrograman Web (Framework Lanjutan - CRUD)

```
Ananda Fatah Anggara Yudha - 312010186
TI.20.A.1
```

## Laporan Praktikum
### Persiapan
Pastikan MySQL server sudah berjalan dan buat sebuah database sebagai berikut:

### Langkah 1 - Konfigurasi Database
Membuat konfigurasi hubungan ke database server dengan menggunakan file `.env`.

### Langkah 2 - Membuat Model
Buat file baru pada direktori /app/Models dengan nama ArtikelModel.php

### Langkah 3 - Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori /app/Controllers. 

### Langkah 4 - Membuat View
Buat direktori baru dengan nama <b>artikel</b> pada direktori /app/Views, kemudian buat file baru dengan nama <b>index.php</b>.
Lalu buka alamat http://localhost:8080/artikel untuk melihat hasilnya.

Tidak ada data yang ditampilkan karena database masih kosong.

Tambahkan data pada database untuk ditampilkan datanya.

Maka akan muncul tampilan seperti ini ketika browser direfresh.

### Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda.
Tambahkan sebuah fungsi baru pada <b>Controller Artikel</b> (/app/Controllers/Artikel.php) dengan nama <b>view()</b>.

### Langkah 6 - Membuat View Detail
Buat file baru dalam folder artikel <b>(/app/Views/artikel/)</b> dengan nama <b>detail.php</b> untuk menampilkan halaman detail.

### Langkah 7 - Membuat Route
Buka file <b>Routes.php</b> dalam folder <b>(/app/Config/)</b> dan tambahkan routing untuk ke halaman detail artikel.</br>
`$routes->get('/artikel/(:any)', 'Artikel::view/$1');`

Maka akan tampil halaman dari artikel yang diklik.

### Langkah 8 - Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel.</br>
Buat method atau fungsi baru pada <b>Controller Artikel</b> dengan nama <b>admin_index()</b>.

Kemudian buat file <b>admin_index.php</b> dalam folder <b>(/app/Views/artikel/)</b> untuk tampilan halaman admin.

Kemudian tambahkan routing untuk menu admin

Menu admin dapat diakses dengan alamat http://localhost:8080/admin/artikel

### Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>add()</b>.

Kemudian buat view untuk form tambah dengan nama <b>form_add.php</b> dalam folder <b>(/app/Views/artikel/)</b>.



### Langkah 10 - Mengubah Data
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>edit()</b>.

Kemudian buat view untuk form tambah dengan nama <b>form_edit.php</b> dalam folder <b>(/app/Views/artikel/)</b>.


### Langkah 11 - Menghapus Data
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>delete()</b>.

## Pertanyaan dan Tugas
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

## Jawab/Hasil
Saya telah menyelesaikan program diatas agar dapat berjalan dengan semestinya. Seperti membuat file <b>admin_header.php</b> dan <b>admin_footer.php</b> serta CSSnya.



# Praktikum 13 - Pemrograman Web (Framework Lanjutan - Modul Login)

```
Ananda Fatah - 312010186
TI.20.A.1
```

## Laporan Praktikum
### Persiapan
Pastikan MySQL server sudah berjalan dan buat sebuah tabel

### Langkah 1 - Membuat Model User
Buat file baru pada direktori <b>app/Models</b> dengan nama <b>UserModel.php</b> untuk memproses data login.

### Langkah 2 - Membuat Controller User
Buat Controller baru dengan nama <b>User.php</b> pada direktori <b>app/Controllers</b>. Kemudian tambahkan method <b>`index()`</b>untuk menampilkan daftar user, dan method <b>`login()`</b> untuk proses login.

### Langkah 3 - Membuat View Login
Buat direktori baru dengan nama <b>user</b> pada direktori <b>app/views</b>, kemudian buat file baru dengan nama <b>login.php</b>.

### Langkah 4 - Membuat Database Seeder
Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password ke dalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:
`php spark make:seeder UserSeeder`

Buka file <b>UserSeeder.php</b> yang berada di lokasi direktori
<b>/app/Database/Seeds/UserSeeder.php</b>



Kemudian lakukan uji coba login dengan mengakses url : http://localhost:8080/user/login

### Langkah 5 - Menambah Auth Filter
Buat file baru dengan nama <b>Auth.php</b> pada direktori <b>app/Filters</b> untuk memfilter halaman admin. 

Kemudian buka file <b>app/Config/Filters.php</b> 

Lalu buka file <b>app/Config/Routes.php</b> dan sesuaikan kodenya 

Maka ketika mengakses alamat http://localhost:8080/admin/artikel akan dibawa ke halaman login.

### Langkah 6 - Menambah Fungsi Logout
Tambahkan method logout pada <b>Controller User</b>

Maka ketika menekan logout dan konfirmasi, akan kembali ke halaman login.

## Pertanyaan dan Tugas
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

## Hasil/Jawab
Saya telah menyelesaikan program diatas agar dapat berjalan dengan semestinya. Mulai dari login untuk ke halaman admin sampai logout serta cssnya.


# Praktikum 14 - Pemrograman Web (Pagination dan Pencarian)

```
Ananda Fatah - 312010186
TI.20.A.1
```

## Laporan Praktikum
### Langkah 1 - Membuat Pagination
Pagination digunakan untuk membatasi tampilan data pada sebuah halaman menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan.</br>

Untuk membuat pagination Codeigniter 4, buka kembali <b>Controller Artikel</b>, kemudian modifikasi kode pada method <b>admin_index</b>

Kemudian buka file <b>views/artikel/admin_index.php</b> dan tambahkan kode berikut dibawah deklarasi tabel data.

Buka menu daftar artikel untuk melihat hasilnya. Disini saya membatasi hanya 5 data saja yang ditampilkan perhalamannya.

### Langkah 2 - Membuat Pencarian
Pencarian data digunakan untuk memfilter data.</br>
Untuk membuat pencarian data, buka kembali <b>Controller Artikel</b>, pada method <b>admin_index</b> ubah kodenya 

Kemudian buka kembali file <b>views/artikel/admin_index.php</b> dan tambahkan form pencarian sebelum deklarasi tabel 
Dan ubah link pager menjadi `<?= $pager->only(['q'])->links(); ?>`.

Selanjutnya buka kembali halaman admin artikel dan masukkan kata kunci tertentu pada form pencarian.

### Langkah 3 - Membuat Upload Gambar
Menambahkan fungsi unggah gambar pada tambah artikel.</br>
Buka kembali <b>Controller Artikel</b>, sesuaikan kode pada method <b>add</b>
Kemudian pada file <b>views/artikel/form_add.php</b> tambahkan field input file serta sesuaikan tag form dengan menambahkan <i>ecrypt type</i> 

Kemudian lakukan percobaan membuat artikel dengan mengupload sebuah gambar.

```
NAMA  : Ananda Fatah Anggara Yudha
NIM   : 312010186
KELAS : TI.20.A.1
Universitas Pelita Bangsa
```
