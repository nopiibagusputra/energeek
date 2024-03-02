# Assessment Energeek

Repositori Project Test

## Fitur Aplikasi

1. Menambah data Pelamar

## Framework Aplikasi

1. Backend | Laravel 9.52.16 (PHP 8.2.15)
2. Frontend | Vue 3 (Node v21.4.0)
3. Database | MySQL

## Instalasi dan Konfigurasi Database

1. Buat Database dengan nama energeek

## Instalasi dan Konfigurasi Backend

1. Clone repositori:

    ```bash
    git clone https://github.com/nopiibagusputra/energeek.git
    ```

2. Masuk ke folder backend:

    ```bash
    cd energeek
    ```

3. Instal dependensi aplikasi dengan Composer:

    ```bash
    composer install
    ```

4. Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

5. Update file `.env`. kemudian ganti nama database menjadi `energeek`.

6. Jalankan generate key

    ```bash
    php artisan key:generate
    ```

7. Jalankan optimisasi aplikasi

    ```bash
    php artisan optimize
    ```

8. Jalankan migrasi database:

    ```bash
    php artisan migrate
    ```

9. Jalankan server pengembangan Laravel:

    ```bash
    php artisan serve
    ```

    API backend akan dapat diakses pada `http://127.0.0.1:8000/api/v1`.
