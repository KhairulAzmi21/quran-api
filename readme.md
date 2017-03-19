Quran API Open Source Project

To Install application

1. Download zip or Git Clone the Repository

2. Run this command
```
composer install
```

3. Copy file `.env.example` and rename to `.env` 

4. Also change setting to match your environment

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=
APP_TIMEZONE=UTC

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=memcached
QUEUE_DRIVER=sync
``` 

5.Run this command
```
php artisan migrate
php artisan db:seed
```

6. Finally import database