continuar a escrever
configurações feitas

1 - baixar php e módulos 
 sudo pacman -S php 
 sudo pacman -S php-pgsql 
 sudo pacman -S php-apache php-cgi php-fpm php-gd  php-embed php-intl php-imap  php-redis php-snmp
 sudo pacman -S composer

2 - Configurar env
 criar arquivo env
 verificar config do db escolhido DB_CONNECTION=pgsql, DB_PORT=port 5432 ,DB_USERNAME, DB_DATABASE
 criar estrutura na base de dados

3 - Composer install 
 generete APP_KEY

4 - Rodar o projeto
 verificar extensões do php -> linux  extension=gd  extension=pdo_pgsql  extension=exif -----> para importar imagens
 mudar a APP_URL=http://localhost para --> http://127.0.0.1:8000

5 - rodar o projeto base
 php artisan voyager:install --with-dummy verificar ser as migrates estão corretas
 logar com usuario padrão admin@admin.com password


6 -- se der o errro 
 Allowed memory size of 134217728 bytes exhausted (tried to allocate 32768 bytes) in /home/wagner/Univagas/vendor/symfony/error-handler/Error/FatalError.php on line 1

entra no php.ini e aumentar a memory_limit
