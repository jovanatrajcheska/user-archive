# Setup Guide

## Prerequisites

-   **PHP**: Version 8.3.9 ^
-   **Composer**
-   **Web Server**: Apache, Nginx, or Laravel's built-in server
-   **Database**: MySQL

## Steps

### 1. Clone the Repository

```bash
git clone https://github.com/jovanatrajcheska/user-archive.git
cd user-archive
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Set Up the Environment File

Run the following command

```bash
cp .env.example .env
```

Then, open the `.env` file and update the settings (like database credentials) to match your environment.

### 4. Generate an Application Key

```bash
php artisan key:generate
```

### 5. Run Database Migrations

```bash
php artisan migrate
```

### 6. Start the Development Server

```bash
php artisan serve
```

The application should be available at [http://127.0.0.1:8000](http://127.0.0.1:8000).
