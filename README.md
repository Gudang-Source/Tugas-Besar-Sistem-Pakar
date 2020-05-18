# Tugas Besar Sistem Pakar
Repository Ini digunakan untuk memenuhi tugas sistem pakar

## Sistem Informasi Pemilihan Kendaraan Pada Rental Mobil Menggunakan Metode Forward Chaining
### kelompok 3  
1. Arjun Yuda Firwanda     1174008
2. Dwi Septiani            1174003
3. Dwi Yulianingsih        1174009
4. Felix Setiawan Lase     1174026
5. Harun Ar - Rasyid       1174027
6. Nico Ekklesia Sembiring 1174096

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Gunakan Perintah Berikut Agar Aplikasi Berjalan Dengan Semestinya : 
## Instal composer terlebih dahulu
[Download disini](https://getcomposer.org/download/)

### Instal packagenya terlebih dahulu
```
composer install
```

### Copy isi file .env.example
```
cp .env.example .env
```

### Generate Key Baru
```
php artisan key:generate
```

Pada file .env yang telah dibuat, ganti DB_DATABASE dengan ***sispar***
dan database tersebut harus ada pada web server kalian (phpmyadmin)

### Lakukan Migrasi Database
```
php artisan migrate
```

### Jalankan aplikasi
```
php artisan serve
```
