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
- **GET /api/orders**: Untuk mendapatkan daftar order.
- **PUT /api/orders/{id}/approve**: Untuk approve order.
- **PUT /api/orders/{id}/reject**: Untuk reject order.
- **GET /api/users**: Untuk mendapatkan daftar user.
- **POST /api/users**: Untuk menambah user baru.
- **PUT /api/users/{id}**: Untuk mengedit user.
- **DELETE /api/users/{id}**: Untuk menghapus user.
- **GET /api/sesis**: Untuk mendapatkan daftar sesi.
- **POST /api/sesis**: Untuk menambah sesi baru.
- **PUT /api/sesis/{id}**: Untuk mengedit sesi.
- **DELETE /api/sesis/{id}**: Untuk menghapus sesi.
- **GET /api/pakets**: Untuk mendapatkan daftar paket.
- **POST /api/pakets**: Untuk menambah paket baru.
- **PUT /api/pakets/{id}**: Untuk mengedit paket.
- **DELETE /api/pakets/{id}**: Untuk menghapus paket.
- **GET /api/profile**: Untuk mendapatkan data profil admin.
- **PUT /api/profile**: Untuk mengedit profil admin.
- **GET /api/users/{id}/riwayat**: Untuk mendapatkan riwayat bekam user.

## Panduan Instalasi

1. **Clone Repository**

   ```sh
   git clone https://github.com/username/bekam-balikpapan.git
   cd bekam-balikpapan
   ```

2. **Instal Dependensi**

   ```sh
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database dan lainnya.

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
