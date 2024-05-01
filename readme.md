## yii-stikom
Web Base Programming berbasis php framework Yii

## Informasi
1. Kostumisasi menggunakan `bootstrap`.
2. Nama DB: `stikom`.
3. Dump db update ada di: `/database/stikom.sql`
4. Database ada 7 tabel :
```
    1. user
    2. menu
    3. siswa
    4. gender
    5. kelas
    6. jurusan
    7. prodi
```

5. Implementasi `Access Control Login` yg sederhana, login based dari tabel user.
6. Menu dinamis based dari tabel `menu`.
7. Relasi tabel `siswa` ke tabel `gender, kelas, jurusan, prodi`. 
8. User role ada 2 saja:
    * admin
    * user

## Tambahan
1. Di menu `Siswa` bisa upload/kelola foto/gambar
2. Login dengan role admin: username = `stikom`, dan password = `stikom`.

## Update - 8/12/2019
1. Tambah static page `API`, format `JSON` dengan method `GET`, list semua siswa.
2. Tambah validasi file upload, jika field foto kosong, maka dipakai default `logo stikom/default.png`. Jika upload/update foto baru, akan `overwrite` foto lama.
3. Tambah rule `user`, pada page Siswa `view`, role `Admin` semua data ditampilkan, sedangkan role `user` tidak/limited. 
4. Tambah screenshot.

## Update - 21/11/2019
1. Semua menu ditambahkan icon menggunakan `fontawesome`.
2. Tabel menu ditambahkan field `icon` -> akomodasi nomor 1.
3. Penambahan `custom.css` -> kostumisasi `Menu Navigasi`
4. Default layout setiap controller diset ke 1 kolom saja -> `$layout='//layouts/column1'`. 
5. Sidebar `Operations` dikustomisasi ke button `bootstrap`.
6. Menu `Admin/User` digabung menjadi satu navigasi `dropdown`.
7. Semua menu dikostumisasi ke navigasi `bootstrap`.
8. `Error Page` diset ke `site/error`.
9. Role `User` diset bisa akses `index` dan `view` semua menu -> `UserController => Access Rules`.

## Screenshots
1. Index Page
![Index Page](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-Index.png)

2. Login Page
![Login Page](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-Login.png)

3. Page Siswa - Admin
![Page Siswa - Admin](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-Siswa-Admin.png)

4. Page Siswa - View
![Page Siswa - View](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-Siswa-View.png)

5. Page Siswa - Update
![Page Siswa - Update](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-Siswa-Update.png)

6. Page Menu - Admin
![Page Menu - Admin](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-Menu-Admin.png)

7. Page User - Admin
![Page User - Admin](https://github.com/antoniusarie/yii-stikom/blob/master/screenshot/Yii-User-Admin.png)


## Penutup
Sekian dan terimakasih.
