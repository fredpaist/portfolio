# My portfolio code

### Install

1. create file config.php in root folder

like this:
```php
define('DB_HOST', 'hostname');  
define('DB_NAME', 'dbname');
define('DB_PREFIX', 'prefix');
define('DB_PW', 'db_password');
define('DB_USER', 'db_username');
```

2. composer install
3. npm install

### Vue-js components are made with browersify:
* npm run build-js - will create public/js/build.js from resources/assets/js/main.js
* npm run watch-js - not working yet (planning to change browserify to webpack)  
