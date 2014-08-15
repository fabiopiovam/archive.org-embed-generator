archive.org embed generator
===========================

Generador de embed de los archivos almacenados en Archive.org para Wordpress, principalmente. 

Disponible [aquí](http://archive.laborautonomo.96.lt/ "Acessar")

Utiliza
-------
* [PHP 5 with cURL](https://php.net/manual/book.curl.php)
* [archive.org API](http://archive.org/help/json.php)
* [jQuery 1.11.0](https://github.com/jquery/jquery)
* [Twitter bootstrap 2.3.2](https://github.com/twbs/bootstrap)
* [lightbox 2.7.1](https://github.com/lokesh/lightbox2/)

### Configurar link de su bookmarks del archive.org  (opcional)
Cambiar el archivo `get-bookmarks.php` para mostrar los itens de su bookmarks del archive.org en los ejemplos.

```php
/*
* uncomment this line to use your bookmarks
* */
$api->set_my_bookmarks('http://archive.org/bookmarks/YourAccount');
```