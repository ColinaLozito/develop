call composer install
call composer update
call composer dump-autoload
cd migrations
call php migration.php
start http://localhost/develop

pause