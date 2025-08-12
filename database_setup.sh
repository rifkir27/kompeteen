#!/bin/bash

# Database Setup Script for E-Learning Platform
# Run this script to set up the database

echo "🚀 Setting up E-Learning Platform Database..."

# Check if MySQL is running
if ! pgrep -x "mysqld" > /dev/null; then
    echo "❌ MySQL is not running. Please start MySQL first."
    exit 1
fi

# Create database
echo "📊 Creating database..."
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS elearning_platform CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Check if .env exists, create if not
if [ ! -f .env ]; then
    echo "⚙️ Creating .env file..."
    cp .env.example .env
fi

# Generate application key
echo "🔑 Generating application key..."
php artisan key:generate

# Run migrations
echo "🔄 Running migrations..."
php artisan migrate:fresh

# Optional: Run seeders
echo "🌱 Seeding database..."
php artisan db:seed

echo "✅ Database setup complete!"
echo "🌐 Your e-learning platform database is ready!"
