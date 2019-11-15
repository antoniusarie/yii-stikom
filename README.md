# yii-stikom
Web Base Programming berbasis php framework Yii

(STIKOM Binaniaga Bogor)

# Informasi
1. Kostumisasi menggunakan bootstrap
2. Nama db: 
    * stikom

3. Dump db update ada di:
    * /database/stikom.sql

4. Database ada 7 tabel :
    * user
    * menu
    * siswa
    * gender
    * kelas
    * jurusan
    * prodi

5. Implementasi Access Control Login yg sederhana, login based dari tabel user
6. Menu dinamis based dari tabel menu
7. Relasi tabel siswa ke tabel gender, kelas, jurusan, prodi 
8. User role ada 2 saja:
    * admin
    * user

# Tambahan
1. Di menu 'Siswa' bisa upload/kelola foto/gambar
2. Login dengan role admin:
    > username = stikom
    
    > password = stikom

# Pembaruan
1. Semua menu ditambahkan icon menggunakan fontawesome
2. Tabel menu ditambahkan field 'icon' -> akomodasi nomor 1
3. Penambahan custom.css -> kostumisasi Menu Navigasi
4. Default layout setiap controller diset ke 1 kolom saja -> $layout='//layouts/column1' 
5. Sidebar 'Operations' dikustomisasi ke button bootstrap
6. Menu Admin/User digabung menjadi satu navigasi dropdown
7. Semua menu dikostumisasi ke navigasi bootstrap
8. Error Page diset ke 'site/error'
9. Role 'User' diset bisa akses 'index' dan 'view' semua menu -> UserController => Access Rules
10. Segitu dulu, minggu depan lanjut lagi 

# Penutup
Buat siapa saja yg kebetulan mau pakai, silahkan saja!
