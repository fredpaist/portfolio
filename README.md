# My portfolio code

Projekt, mis oli vajalik kooli lõpetamiseks, nüüd olen võtnud eesmärgi seda uuendada ja paremaks teha.

this is version 1 - right now I'm trying to get rid of all old code
* start using vue.js instead of jQuery
* start using webpack so we can also use scss and postcss
* messy php code cleanup

### Install

1. create file config.php in root folder

like this:
```php
define('DB_HOST', 'host');  
define('DB_NAME', 'db_name');
define('DB_PREFIX', 'db_prefix');
define('DB_PW', 'db_password');
define('DB_USER', 'db_username');
```

2. composer install
3. npm install
4. due to updates, database tables have to be made manually, will be solved in the future (MySQL create table codes are stored in include/database)

### Vue-js components are made with browserify:
* npm run build-js - will create public/js/build.js from resources/assets/js/main.js
* npm run watch-js - not working yet (planning to change browserify to webpack)  
