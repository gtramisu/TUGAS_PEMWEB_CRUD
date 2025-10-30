# 💎 ROBUFIXY – Website Top Up Robux Online

Selamat datang di **ROBUFIXY**, platform top up Robux terpercaya dan mudah digunakan.  
Website ini dikembangkan menggunakan **PHP Native**, **MySQL**, dan **HTML/CSS** untuk memberikan pengalaman cepat, aman, dan responsif bagi pengguna.

---

## ✨ Fitur Utama

- 🔐 **Login & Logout**  
  Sistem autentikasi aman menggunakan *session PHP*, memastikan hanya pengguna yang terdaftar dapat mengakses halaman penting.

- 🏠 **Beranda (index.php)**  
  Halaman utama yang menampilkan navigasi ke menu pembelian, bantuan, dan login dengan tampilan modern dan sederhana.

- 🛍️ **Form Pembelian (beli1.php, beli2.php, beli3.php)**  
  Pengguna dapat memilih jenis top up dan mengisi data pesanan. Setelah dikirim, data otomatis tersimpan ke database.

- 📦 **Cek Pesanan (cek-pesanan.php)**  
  Fitur untuk menampilkan daftar transaksi pengguna berdasarkan akun yang sedang login.

- 🧑‍💼 **Dashboard Admin (dashboard.php)**  
  Halaman khusus admin untuk melihat seluruh pesanan pelanggan secara real-time dengan tombol hapus dan kontrol penuh.

- ⚙️ **Kelola Produk (CRUD)**  
  Admin dapat mengelola data produk melalui:
  - 📄 **Daftar Produk** – Menampilkan seluruh produk yang tersedia  
  - ➕ **Tambah Produk** – Menambahkan produk baru  
  - ✏️ **Edit Produk** – Mengubah data produk yang sudah ada  
  - ❌ **Hapus Produk** – Menghapus produk dari daftar

- 💬 **Bantuan (bantuan.php)**  
  Berisi panduan dan informasi singkat tentang cara pemesanan di ROBUFIXY.

- ✅ **Halaman Sukses (sukses.php)**  
  Memberi notifikasi kepada pengguna setelah transaksi berhasil disimpan ke sistem.

- 🔒 **Validasi & Keamanan**  
  Setiap form memiliki validasi input dasar untuk mencegah kesalahan data dan menjaga keamanan.

-🎨 **UI Modern & Responsif** 
  Desain minimalis dan cocok di semua ukuran layar (HP & Desktop).

---

## ⚙️ Kebutuhan Sistem

- 🐘 **PHP** versi 8.0 atau lebih tinggi  
- 🗃️ **MySQL** versi 5.7+ atau **MariaDB** 10.2+  
- 🌐 **Web Server** (XAMPP, Laragon, Apache/Nginx)  
- 🔌 **PDO / MySQLi Extension** aktif di PHP  
- 🧭 **Browser Modern** (Chrome, Firefox, Edge, Safari)

---

## 🚀 Cara Instalasi & Konfigurasi

1. **Clone atau Download Repository**
   ```bash
   git clone https://github.com/username/ROBUFIXY.git

2. **Setup Database**
  Buat database baru di MySQL dengan nama `robufixy_db`, lalu jalankan perintah berikut:
```sql
  CREATE DATABASE robufixy_db;
  USE robufixy_db;
  
  CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    deskripsi TEXT,
    tanggal_ditambahkan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );
  
  CREATE TABLE pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pemesan VARCHAR(100) NOT NULL,
    id_produk INT,
    jumlah INT,
    total_harga DECIMAL(10,2),
    tanggal_pesan TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produk) REFERENCES produk(id)
  );
  
  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user'
  );
```
---

3. **Konfigurasi Database**
  Buat file config/database.php dengan isi seperti berikut:
  
  <?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'robufixy_db';
  
  $conn = mysqli_connect($host, $user, $pass, $db);
  
  if (!$conn) {
      die("Koneksi gagal: " . mysqli_connect_error());
  }
  ?>

4. **Jalankan di Browser**
  http://localhost/robufixy

---

## 🗂️ Struktur Folder

Robufixy Web/
├── .qodo/                        
├── config/                      
│   └── database.php              
│
├── folder/                       
│   ├── daftarproduk.php          
│   ├── tambahproduk.php          
│   ├── editproduk.php            
│   └── hapusproduk.php           
│
├── dashboard.php                 
├── index.php                     
├── login.php                     
├── logout.php                    
│
├── beli1.php                     
├── beli2.php                    
├── beli3.php                  
│
├── cek-pesanan.php              
├── bantuan.php                 
├── sukses.php                  
│
├── style.css                   
├── script.js                    
│
├── rocket.png                    
└── wow.png                       


---

## 🧾 Contoh Environment Config
  <?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "topup_roblox";
  $conn = mysqli_connect($host, $user, $pass, $db);
  
  if (!$conn) {
      die("Koneksi gagal: " . mysqli_connect_error());
  }
  ?>

---

## 🖼️ Screenshot Aplikasi
1. **Halaman Utama**
<img width="1901" height="903" alt="image" src="https://github.com/user-attachments/assets/99cd7e41-1a5d-40b4-ab09-0efabb8d78fe" />
<img width="1899" height="898" alt="image" src="https://github.com/user-attachments/assets/87fc081a-7379-4320-a1e8-6fd6d1713fb4" />
---
2. **Beli Robux**
- **Beli 1**
<img width="1896" height="910" alt="image" src="https://github.com/user-attachments/assets/c9944b9e-8f13-422e-82d1-9e6df8b1eb02" />
- **Beli 2**
<img width="1901" height="906" alt="image" src="https://github.com/user-attachments/assets/d2bbb6e5-dbd5-4f2c-854b-637411a1b62a" />
<img width="1897" height="358" alt="image" src="https://github.com/user-attachments/assets/a791c907-9efb-49f6-a00f-8cbdb550bdb1" />
- **Beli 3**
<img width="1919" height="911" alt="image" src="https://github.com/user-attachments/assets/61a9f3df-389e-41ef-9455-ee9666275e11" />
---
3. **Sukses Membeli**
<img width="1917" height="906" alt="image" src="https://github.com/user-attachments/assets/bd8cd497-9fb9-463e-ba0a-0e92d3f51aeb" />
---
4. **Cek Pesanan**
<img width="1919" height="909" alt="image" src="https://github.com/user-attachments/assets/a87d02e3-a450-4ea5-9a62-940fed5191b3" />
---
5. **Bantuan**
<img width="1900" height="903" alt="image" src="https://github.com/user-attachments/assets/23ddf73d-62bf-452c-a626-1d27c816745d" />
---
6. **Login**
<img width="1919" height="912" alt="image" src="https://github.com/user-attachments/assets/083cbb7e-f1ec-47c6-9781-3974944e17cc" />
---
7. **Dashboard Admin**
<img width="1901" height="903" alt="image" src="https://github.com/user-attachments/assets/d6236550-e693-402b-b6ab-0093de5c055e" />
<img width="1898" height="901" alt="image" src="https://github.com/user-attachments/assets/b1b94d0c-2838-4025-a071-6f5670752d4a" />
---
8. **Kelola Produk**
<img width="1899" height="904" alt="image" src="https://github.com/user-attachments/assets/da420478-4f48-4d91-b6aa-c3eb2a21fd83" />
<img width="1896" height="335" alt="image" src="https://github.com/user-attachments/assets/1aa947ea-a544-4295-8cc6-6c5b553d99f4" />

---

## 👩‍💻 Tentang Developer
--------------------------------------------------------------
| Nama         | Adis                                        |
---------------|----------------------------------------------
| 🎓 NIM       | 2409106026                                  |
| 🏫 Kampus    | Universitas Mulawarman                      |
| 💻 Jurusan   | Informatika                                 |
| 📧 Email     | naagadis@gmail.com                          |
| 🌐 GitHub    | https://github.com/gtramisu                 |
| 📷 Instagram | @gtramisu                                   |
--------------------------------------------------------------

**Selamat menggunakan web Topup Roblox di Robufixy! Terima kasih :3**



