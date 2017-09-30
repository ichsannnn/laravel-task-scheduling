# Laravel Task Scheduling with Cron Job
Penjadwalan tugas Laravel menggunakan Cron Job. Pada project ini, perintah Cron akan dijalankan tiap menit, tetapi Laravel tetap akan menjalankan _command_ sesuai dengan [jadwal](https://laravel.com/docs/5.5/scheduling#schedule-frequency-options) yang sudah ditetapkan, dalam hal ini 5 menit.

## Instalasi
* Buka terminal linux
* Jalankan perintah berikut
```bash
$ cp .env.example .env
$ composer install
$ php artisan key:generate
```
* Buka file .env menggunakan text editor, lalu ubah dan sesuaikan dengan settingan yang dimiliki
* Setelah itu jalankan perintah berikut
``` bash
$ php artisan migrate
```
* Lalu buatlah cron job. Pada terminal ketik perintah berikut
```bash
$ crontab -e
```
* Perintah tersebut akan menampilkan _nano text editor_ pada terminal. Masukan kode berikut pada line terakhir.
```bash
* * * * * php /lokasi-project-anda/artisan schedule:run >> /dev/null 2>&1
```
* Kode tersebut berfungsi untuk menjalankan perintah **php artisan schedule:run** setiap menitnya
* Untuk mengetahui apakah cron berjalan atau tidak, bisa mengetik perintah berikut pada terminal
```bash
$ grep CRON /var/log/syslog
