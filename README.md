
# freeCodeGram

First Laravel project, social networking site
## Authors

- [@Jelinskyy](https://www.github.com/Jelinskyy)

## Installation

1. Select directory

2. Clone the project

```bash
git clone https://github.com/Jelinskyy/freeCodeGram
```

3. Go to the project directory

```bash
cd .\freeCodeGram
```

4. Install Composer Dependencies

```bash
composer install
```

5. Create a copy of your .env file
```bash
cp .env.example .env
```

6. Cofigure sql connection in your .env file & prapare your sql server
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=free-code-gram
DB_USERNAME=root
DB_PASSWORD=
```

7. Generate an app encryption key
```bash
php artisan key:generate
```

8. migrate database
```bash
php artisan migrate
```

9. Start server 

```bash
php artisan serve
```