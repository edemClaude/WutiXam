# WutiXam - Laravel Development Learning App

WutiXam is a Laravel-based web application designed for learning and practicing web development skills. This project serves as a playground for developers to explore Laravel features, experiment with code, and enhance their understanding of modern web development practices.

## Features

- Built with Laravel 11.x
- SQLite database for easy setup and portability
- Includes Laravel Sanctum for API authentication
- Configured for local development environment

## Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm (for frontend assets)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/wutixam.git
   cd wutixam
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:

   ```bash
   cp .env.example .env
   ```

4. Generate an application key:

   ```bash
   php artisan key:generate
   ```

5. Create the SQLite database:

   ```bash
   touch database/database.sqlite
   ```

6. Run database migrations:

   ```bash
   php artisan migrate
   ```

7. Install and compile frontend assets:

   ```bash
   npm install
   npm run dev
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` in your browser to see the application.

## Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laracasts](https://laracasts.com)
- [Laravel News](https://laravel-news.com)

## Contributing

This project is primarily for learning purposes. However, if you have suggestions or improvements, feel free to fork the repository and submit a pull request.

## License

This learning project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
