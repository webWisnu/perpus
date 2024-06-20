


## Instalasi

1. Clone repository
    ```bash
    git clone https://github.com/username/nama-proyek.git
    cd nama-proyek
    ```

2. Instal dependensi
    ```bash
    composer install
    ```

3. Salin file `.env.example` ke `.env` dan konfigurasikan
    ```bash
    cp .env.example .env
    ```

4. Generate application key
    ```bash
    php artisan key:generate
    ```

5. Jalankan migrasi database
    ```bash
    php artisan migrate
    ```

6. Jalankan server
    ```bash
    php artisan serve
    ```



Cara mengisi Databasesnya
1. isi table role manual lewat phpmyadmin role id 1 Adalah Admin dan Role id 2 adalah user
2. setelah itu isi table users dengan nama admin dan role id 1
3. lalu setelah di buat login dengan kata useraname dan kata sandi
4. setelah itu Admin bisa Akses semua fitur

             T
