🏨 Booking Management System (BMS)

A web-based Booking Management System built using Laravel, designed to manage any bookings with secure authentication, role-based access, and efficient booking workflow.

🚀 Features

User & Admin authentication (Laravel Authentication + Role Baesed Access Control)
Room booking with availability tracking
Booking status management (Create / Update / Delete)
Admin dashboard for managing users, bookings, and webpages
Secure form validation and session handling
Responsive UI using Blade templates

🛠 Tech Stack
Backend: PHP (Laravel)
Frontend: Blade, HTML, CSS, JavaScript
Database: MySQL
Authentication: Laravel Auth
Deployment: Render / Local Server

⚙️ Setup Instructions

git clone https://github.com/your-username/booking-management-system.git

cd booking-management-system

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve


📌 Project Purpose

This project was developed to understand real-world backend workflows, database design, authentication, and CRUD-based system development using Laravel.
