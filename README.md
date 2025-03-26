# Cara Menjalankan

Pastikan laptop sudah terinstal `Node.js` dan `composer`, jika belum bisa instal melalui:
[Node.js](https://nodejs.org/en)
[Composer](https://getcomposer.org/download/)

Untuk mengecek Instalasi, jalankan perintah ini di terminal:

Untuk mengecek apakah `Node.js` sudah terinstal :

```zsh
node --version
```

Untuk mengecek apakah `composer` sudah terinstal :

```zsh
composer --version
```

1. Buka terminal dengan menjalankan perintah :

```zsh
git clone https://github.com/iballibull/simple-dashboard.git
```

2. Pindah directory dengan menjalankan perintah :

```zsh
cd simple-dashboard
```

3. Instal dependency yang dibutuh kan dengan menjalankan perintah :

```zsh
npm install
```

4. Ubah file `.env.example` menjadi `.env`
5. Jalankan XAMPP (windows) atau MAMP(mac)
6. Ubah value pada `.env` menjadi seperti ini :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_dashboard
DB_USERNAME=username-mysql
DB_PASSWORD=password-mysql
```

7. Jalankan migration agar database dan table terdefinisikan, dengan menjalankan perintah pada terminal :

```zsh
php artisan migrate
```

8. Jalankan seeder agar data tersedia, dengan menjalankan perintah pada terminal:

```zsh
php artisan db:seed --class=SaleDetailSeeder
```

9. Lakukan build agar tampilan sempurna dengan menjalankan perintah terminal :

```zsh
npm run build
```

10. Generate key dengan menjalankan perintah terminal :

```zsh
php artisan key:generate
```

10. Jalankan server dengan menjalan perintah terminal :

```zsh
php artisan serve
```

11. Akses link ini di browser : http://localhost:8000/
