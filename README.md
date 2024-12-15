# Dokumentasi Aplikasi Web "Bekam Balikpapan"

## Deskripsi

"Bekam Balikpapan" adalah aplikasi web khusus admin yang berfungsi untuk mengelola order customer dari aplikasi mobile. Admin dapat melakukan approve order, mengatur sesi praktek, mengelola data paket, dan melihat riwayat bekam user.

## Fitur Utama

1. **Approve Order Customer**

   - Admin dapat melihat dan menyetujui order yang dibuat oleh customer melalui aplikasi mobile.

2. **Pengaturan User**

   - Admin dapat mengelola data user termasuk menambah, mengedit, dan menghapus user.

3. **Pengaturan Sesi**

   - Setiap sesi memiliki durasi 30 menit.
   - Sesi dimulai dari jam 09:00 pagi hingga jam 18:00 sore.
   - Admin dapat mengatur waktu sesi praktek.

4. **Data Paket**

   - Mengelola data paket bekam, termasuk:
     - Paket Bekam Kering.
     - Paket Bekam Basah.

5. **Data Order Bekam**

   - Admin dapat melihat daftar order bekam yang dilakukan oleh customer.

6. **List Sesi dengan Order**

   - Menampilkan list sesi yang tersedia beserta order yang ada pada sesi tersebut (jika ada order pada jam sesi tersebut).

7. **Profile Admin**

   - Admin dapat melihat dan mengedit profil mereka sendiri.

8. **Riwayat Bekam User**
   - Admin dapat melihat riwayat bekam dari setiap user.

## Struktur Database

### Tabel Users

- **id**: Integer, Primary Key
- **name**: String
- **email**: String, Unique
- **password**: String
- **created_at**: Timestamp
- **updated_at**: Timestamp

### Tabel Sesi

- **id**: Integer, Primary Key
- **order**: Integer
- **name**: String
- **jam**: Time
- **keterangan**: String
- **created_at**: Timestamp
- **updated_at**: Timestamp

### Tabel Paket

- **id**: Integer, Primary Key
- **name**: String
- **description**: Text
- **type**: Enum (kering, basah)
- **price**: Decimal
- **created_at**: Timestamp
- **updated_at**: Timestamp

### Tabel Orders

- **id**: Integer, Primary Key
- **user_id**: Integer, Foreign Key (Users)
- **sesi_id**: Integer, Foreign Key (Sesi)
- **paket_id**: Integer, Foreign Key (Paket)
- **status**: Enum (pending, approved, rejected)
- **created_at**: Timestamp
- **updated_at**: Timestamp

## Alur Kerja

1. **Login Admin**

   - Admin login menggunakan email dan password yang telah terdaftar.

2. **Melihat Order Customer**

   - Admin melihat daftar order yang masuk dari aplikasi mobile.
   - Admin dapat approve atau reject order yang masuk.

3. **Mengelola User**

   - Admin dapat menambah user baru.
   - Admin dapat mengedit informasi user yang sudah ada.
   - Admin dapat menghapus user jika diperlukan.

4. **Mengelola Sesi**

   - Admin dapat menambah sesi baru dengan menentukan jam mulai dan keterangan sesi.
   - Admin dapat mengedit informasi sesi yang sudah ada.
   - Admin dapat menghapus sesi jika diperlukan.

5. **Mengelola Paket**

   - Admin dapat menambah paket baru (kering atau basah).
   - Admin dapat mengedit informasi paket yang sudah ada.
   - Admin dapat menghapus paket jika diperlukan.

6. **Melihat List Sesi dan Order**

   - Admin dapat melihat list sesi yang tersedia beserta order yang ada pada sesi tersebut.

7. **Melihat dan Mengedit Profil**

   - Admin dapat melihat dan mengedit profil mereka sendiri.

8. **Melihat Riwayat Bekam User**
   - Admin dapat melihat riwayat bekam dari setiap user yang telah melakukan bekam.

## API Endpoint

Berikut adalah beberapa endpoint yang digunakan dalam aplikasi ini:

- **POST /api/login**: Untuk login admin.
- **POST /api/googlelogin**: Untuk registrasi userbaru hasil generate googleapis/userinfo/v2/me.
- **GET /api/user**: Untuk mengambil data user yang login.
- **POST /api/user**: Untuk update data user edit profile.
- **ANY /api/logout**: logout user dan menghapus token.
- **POST /api/order**: Untuk mengirimkan data order.
- **GET /api/order**: Untuk mengambil riwayat bekam user.
- **GET /api/order/{sesi_id}/{tanggal}**: Untuk mengambil order berdasarkan sesi_id dan tanggal.
- **GET /api/sesi**: Untuk mengambil data sesi yang tersedia.
- **GET /api/sesi/{sesi}**: Untuk mengambil data sesi yang tersedia berdasarkan id.
- **GET /api/paket**: Untuk mengambil data paket yang tersedia.

## Panduan Instalasi

1. **Clone Repository**

   ```sh
   git clone https://github.com/username/bekam-balikpapan.git
   cd bekam-balikpapan
   ```

2. **Instal Dependensi**

   ```sh
   composer install
   pnpm install
   ```

3. **Konfigurasi Environment**

   ```sh
   // Salin file .env.example menjadi .env dan sesuaikan konfigurasi database dan lainnya.
   cp .env.example .env

   // membuat key untuk laravel
   php artisan key:generate

   // menghubungkan folder storage agar bisa digunakan
   php artisan storage:link
   ```

4. **Migrasi Database**

   ```sh
   php artisan migrate
   php artisan db:seed
   ```

5. **Jalankan Server**
   ```sh
   php artisan serve
   npm run dev
   ```

## Kesimpulan

Aplikasi web "Bekam Balikpapan" memudahkan admin untuk mengelola order, sesi praktek, data paket, dan user. Dengan fitur-fitur yang lengkap, admin dapat melakukan berbagai tugas administrasi dengan mudah dan efisien.

---

Jika ada pertanyaan atau masalah terkait aplikasi ini, silakan hubungi tim pengembang melalui [email@example.com](mailto:email@example.com).
