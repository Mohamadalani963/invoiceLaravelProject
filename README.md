# Invoice Management System

This is a Laravel project for managing invoices, users, roles, and permissions. The features of the project include:

- Creating new users
- User role and permission management
- Adding invoices
- Archiving invoices
- Deleting invoices
- Adding sections
- Adding products

## Getting Started

To use the Invoice Management System, follow these steps:

1. Download the latest release from the [GitHub repository](https://github.com/your-username/invoice-management-system).
2. Extract the files to your web server's document root directory.
3. Run the following commands in the project directory to set up the database and install the dependencies:

```
cp .env.example .env
```
```
php artisan key:generate
```
```
php artisan migrate
```
```
composer install
```


4. Edit the `.env` file to set up your database connection and other settings.
5. Use the `php artisan serve` command to start the development server, and visit the URL `http://localhost:8000` in your web browser to see the project.

## Features

The Invoice Management System has the following features:

### User Management

- User registration
- User login and logout
- User profile editing
- User password reset

### Role and Permission Management

- Role creation and editing
- Permission creation and editing
- Assigning roles and permissions to users

### Invoice Management

- Creating new invoices
- Viewing invoice details
- Archiving invoices
- Deleting invoices

### Section Management

- Adding new sections
- Editing section details
- Deleting sections

### Product Management

- Adding new products
- Editing product details
- Deleting products

## Usage

To create a new user, follow these steps:
1. run the following seeders
```
php artisan db:seed --class=CreateAdminUserSeeder
php artisan db:seed --class=CreateUserSeeder

```

2. Visit the URL `http://localhost:8000` in your web browser.
3. you can sign in as a user with the following credentials:
```
    username:tester
    email:tester@gmail.com
    password:123456789
```
4. you can sign in as a user with the following credentials:
```
    username:admin
    email:testerAdmin@yahoo.com
    password:admin123456
```

## Contributing

If you find any bugs or have feature requests, please submit them as [issues](https://github.com/your-username/invoice-management-system/issues) on GitHub. You can also contribute to the project by submitting pull requests with bug fixes or new features.


## Contact

If you have any questions or feedback, you can contact me at my [email address](mailto:mohamadalani963@gmail.com).

## Credits

The Invoice Management System uses the following third-party packages:

- [Laravel](https://laravel.com/) for the PHP framework
- [Bootstrap](https://getbootstrap.com/) for the CSS framework
- [jQuery](https://jquery.com/) for JavaScript functionality.
