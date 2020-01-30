# Codeigniter 3 MOD
Just another version of Codeigniter with (maybe) silly modification (but in my case works).

## Description
This is Codeigniter 3 with modification. The addition feature list:
1. Tools like artisan in Laravel: Make Models, Controller, Migration, and run Seeder is available
2. The database.php.example and config.php.example to keep database.php and config.php safe
3. Add belongsTo and hasMany in the system/core/Model.php to add deal with relationship
4. File index.php on the public/ directory

## Installation
1. Clone this repo
2. Copy /application/config/database.php.example to /application/config/database.php and set the DB of your own
3. Copy /application/config/config.php.example to /application/config/config.php and set the Config of your own
4. Copy /public/preconfig.php.example to /public/preconfig.php then set your root path folder and environment

## Tools
After installation, you can use the tools with this command
```php tools [argument]```
to see the available argument just run 
```php tools``` or ```php tools list```