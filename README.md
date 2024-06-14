LARAVEL PROJECT SETUP GUIDE

PREREQUISITES

Before you begin, ensure you have met the following requirements:

-   PHP >= 8.1
-   Composer
-   Git
-   Node.js & npm/yarn (for frontend dependencies)
-   A web server (e.g., Apache, Nginx)

GETTING STARTED

Follow these steps to get the project up and running on your local machine.

**1. CLONE THE REPOSITORY**

Clone the repository to your local machine using Git.

    git clone https://github.com/MultiQoSTechnologies/Laravel-Scout-for-Full-text-Search-in-a-big-database.git
    cd Laravel-Scout-for-Full-text-Search-in-a-big-database


**2. INSTALL DEPENDENCIES**

Use Composer to install PHP dependencies.

    composer install


**3. CONFIGURE ENVIRONMENT VARIABLES**

Copy the .env.example file to .env and modify the environment variables as needed.

    cp .env.example .env

Generate a new application key.

    php artisan key:generate


**4. SET UP DATABASE**

Create a new database and update the .env file with your database credentials.

Run the database migrations and seed the database (if applicable).

    php artisan migrate --seed


**5. Create Dummy Records**

    php artisan tinker
    User::factory()->count(2000000)->create()


**6. Import Records**

    php artisan scout:import "App\Models\User"


**7. SERVE THE APPLICATION**

Use the built-in PHP server to serve the application.

    php artisan serve

Visit http://localhost:8000 in your browser to view the application.


8. **User Scout listing**

    ![2024-06-14_11-19](https://github.com/MultiQoSTechnologies/Laravel-Scout-for-Full-text-Search-in-a-big-database/assets/149043274/0efd6b63-2db0-437e-b915-50bc0547e9c4)


For more details, visit MultiQoS. [https://multiqos.com/]
Contact us for collaboration or support:
Email: biz@multiqos.com
