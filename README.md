# Homage Project

This project was developed as part of a group assignment for the **Laravel** module in my training program. The goal of the project was to get hands-on experience with **Laravel** and learn the fundamentals of **Object-Oriented Programming (OOP)** in PHP.

## Project Overview

- **Framework:** Laravel 9
- **Objective:** To learn the basics of the Laravel framework, including routes, controllers, models, views, and database management through migrations and seeders.
- **Collaborative Work:** This project was partially built in collaboration with other students in the group.
- **Database:** The database schema and initial SQL queries were created during the previous module, which focused on SQL basics. For this project, I configured the Laravel application to connect and interact with that database.
  
## Features

- Laravel-based application using MVC (Model-View-Controller) architecture.
- Integration with an existing MySQL database from the SQL module.
- Basic CRUD operations for managing data.
- Practical use of Laravel Blade templates for dynamic web pages.
- Implementation of routing, middleware, and controllers.

## Installation and Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-repo.git
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Set up the environment:
   - Copy the .env.example file to .env:
     ```bash
     cp .env.example .env
     ```
   - Set the database credentials in the .env file to match your existing MySQL database.
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Import the database:
   - In the root of the project, there's a folder named dump which contains a file fruits_and_veggies_shop_dump.sql.
   - To import the database dump, use the following command:
     ```bash
     mysql -u your_username -p your_database_name < dump/fruits_and_veggies_shop_dump.sql
     ```
6. Run migrations (optional, if necessary):
   ```bash
   php artisan migrate
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```
   
## Technologies Used

- **Laravel**: PHP web application framework for building the back-end.
- **Blade Templating**: Laravel's simple, yet powerful templating engine.
- **MySQL**: Relational database management system used for managing data.
- **PHP**: Back-end programming language used in conjunction with Laravel.
- **HTML5/CSS3/BootStrap/JavaScript**: For front-end structure and interactivity.

## Learnings and Experience

Through this project, I had the opportunity to explore Laravel's features, such as:

- Setting up controllers, models, and views following the MVC architecture.
- Using Blade for templating and managing dynamic content.
- Connecting a Laravel application to an existing MySQL database.
- Basic routing, middleware implementation, and form handling.

## License

This project is part of an exercise from the Advanced Developer program at Campus Numérique In The Alps, Grenoble. It is open-source and available under the MIT License. Feel free to use it for your own learning or projects.



