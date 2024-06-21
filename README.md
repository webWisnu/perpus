


## Instalasi

1. Clone repository
    ```bash
    git clone https://github.com/webWisnu/perpus.git
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
6. Jalankan migrasi database seeder untuk membuat data dummy di table role
    ```bash
    php artisan db:seed --class=RoleSeeder
    ```
    

7. Jalankan migrasi database seeder untuk membuat data dummy di table users
    ```bash
   php artisan db:seed --class=DatabaseSeeder

    ```

8. Jalankan File Storage
    ```bash
    php artisan storage:link

    ```
9. Jalankan server
    ```bash
    php artisan serve
    ```
10. User Role
    ```bash
    Role 1 = Admin
    Role 2 = user
    ```



                     

