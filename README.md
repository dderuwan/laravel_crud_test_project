# Laravel CRUD Application

This project is a simple CRUD (Create, Read, Update, Delete) application built using Laravel, Bootstrap CSS, and MySQL. The application demonstrates basic functionalities such as creating, updating, deleting, soft deleting, and viewing records.

## Features

- **Create**: Add new records to the database.
- **Read**: View records in a tabular format.
- **Update**: Edit existing records.
- **Delete**: Permanently delete records from the database.
- **Soft Delete**: Temporarily delete records, allowing for restoration.
- **Responsive Design**: Frontend styled with Bootstrap CSS for a clean and user-friendly interface.

## Technologies Used

- **Backend**: Laravel (PHP Framework)
- **Frontend**: Bootstrap CSS
- **Database**: MySQL
- **Soft Delete**: Laravel's Eloquent Soft Deletes

## Prerequisites

- PHP >= 8.0
- Composer
- MySQL
- Laravel Installer (optional)

## Installation

Follow these steps to set up the application locally:

1. Clone the repository:
   ```bash
   git clone <repository_url>
   cd <project_directory>
   **************************************************
   composer install
   **************************************************
   cp .env.example .env

   .env file DB section -------
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   **************************************************
   php artisan migrate
   **************************************************
   php artisan db:seed
   **************************************************
   php artisan serve
   **************************************************
   http://127.0.0.1:8000







