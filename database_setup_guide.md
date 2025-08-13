# Database Setup Guide for E-Learning Platform

## 1. MySQL Database Creation

### Create Database
```sql
CREATE DATABASE elearning_platform CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### Create User (Optional)
```sql
CREATE USER 'elearning_user'@'localhost' IDENTIFIED BY 'secure_password';
GRANT ALL PRIVILEGES ON elearning_platform.* TO 'elearning_user'@'localhost';
FLUSH PRIVILEGES;
```

## 2. Environment Configuration (.env)

Add these database configuration settings to your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elearning_platform
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Database Migration Commands

Run these commands in order:

```bash
# Generate application key
php artisan key:generate

# Run all migrations
php artisan migrate

# Optional: Seed with test data
php artisan db:seed
```

## 4. Database Schema Summary

### Tables Created:
- **users**: id, name, email, email_verified_at, password, username, google_id, google_token, google_refresh_token, remember_token, created_at, updated_at
- **categories**: id, name, description, created_at, updated_at
- **courses**: id, title, description, thumbnail, category_id, created_by, created_at, updated_at
- **enrollments**: id, user_id, course_id, enrolled_at, created_at, updated_at
- **videos**: id, course_id, title, description, video_url, duration, order, created_at, updated_at
- **migrations**: Laravel migration tracking
- **cache**: Laravel cache storage
- **jobs**: Laravel job queue

### Relationships:
- users → courses (created_by)
- users → enrollments
- courses → categories
- courses → videos
- courses → enrollments
- users → enrollments

## 5. Verification Commands

```bash
# Check migration status
php artisan migrate:status

# Test database connection
php artisan tinker
>>> DB::connection()->getPdo()
```

## 6. Optional: Database Seeder

Create a seeder for initial data:
```bash
php artisan make:seeder ElearningSeeder
php artisan db:seed --class=ElearningSeeder
