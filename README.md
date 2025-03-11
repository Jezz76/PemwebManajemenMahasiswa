# Manajemen Data Mahasiswa

## 📌 Deskripsi
Aplikasi **Manajemen Data Mahasiswa** adalah sistem berbasis web yang memungkinkan pengguna untuk melakukan operasi CRUD (**Create, Read, Update, Delete**) pada data mahasiswa. Aplikasi ini dikembangkan menggunakan **PHP OOP** dengan **PDO** untuk interaksi database, serta menggunakan **Bootstrap** untuk tampilan antarmuka dan **DataTables** untuk pengelolaan data.

## 🚀 Fitur
✅ **Menampilkan daftar mahasiswa** menggunakan DataTables  
✅ **Menambahkan mahasiswa baru**  
✅ **Mengedit data mahasiswa** dengan tampilan yang lebih rapi menggunakan Bootstrap  
✅ **Menghapus mahasiswa**  
✅ **Notifikasi responsif** menggunakan Bootstrap  

## 🛠️ Teknologi yang Digunakan
- **PHP OOP & PDO** → Untuk interaksi dengan database secara aman
- **MySQL** → Sebagai sistem manajemen basis data
- **Bootstrap 5** → Untuk tampilan UI yang responsif
- **DataTables** → Untuk menampilkan data dengan fitur pencarian dan sorting
- **SweetAlert** → Untuk konfirmasi sebelum menghapus data

## 📂 Struktur Folder
```
├── db/               # Folder berisi file database
│   ├── manajemen_mahasiswa.sql  # File SQL untuk database
├── db.php            # Koneksi ke database
├── index.php         # Menampilkan daftar mahasiswa
├── add.php           # Form untuk menambah mahasiswa
├── edit.php          # Form untuk mengedit data mahasiswa
├── delete.php        # Menghapus mahasiswa berdasarkan ID
├── assets/           # Folder berisi file CSS, JS, dan gambar
└── README.md         # Dokumentasi proyek
```

## 📖 Cara Menggunakan
### 1️⃣ Clone Repository
```bash
git clone https://github.com/Jezz76/PemwebManajemenMahasiswa.git
cd PemwebManajemenMahasiswa
```

### 2️⃣ Import Database
1. Buka **phpMyAdmin** atau tool database MySQL lainnya.
2. Buat database dengan nama **manajemen_mahasiswa**.
3. Import file SQL yang ada di folder `db/manajemen_mahasiswa.sql`.

### 3️⃣ Jalankan Aplikasi
1. Pastikan server **XAMPP/Laragon** berjalan.
2. Simpan file di dalam folder `htdocs` (untuk XAMPP) atau folder proyek web server.
3. Akses di browser:
   ```
   http://localhost/PemwebManajemenMahasiswa/
   ```
