## INSTRUKCIJE

1. git clone <ime_projekta>
2. cd <ime_projekta>
3. composer install 
4. napravis fajl koji se zove .env
5. unutar njega prekopiras sve iz .env.example fajla
6. php artisan key:generate
7. PhpMyAdmin, kreiraj bazu domaci3
8. u .env fajlu konfigurises
9. php artisan migrate:refresh
10. php artisan serve
