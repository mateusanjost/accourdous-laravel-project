<h1>INSTRUÇÕES</h1>

Crie um banco de dados e o configure no .env:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=accordous
DB_USERNAME=root
DB_PASSWORD=

Execute as migrações:
php artisan migrate

Rode o projeto:
php artisan serve

