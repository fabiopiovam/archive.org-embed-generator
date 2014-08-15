archive.org embed generator
===========================

Gerador de embed de arquivos armazenados no Archive.org para Wordpress, principalmente. 

Disponível [aqui](http://archive.laborautonomo.96.lt/ "Acessar")

Utilizando
----------
* [PHP 5 with cURL](https://php.net/manual/book.curl.php)
* [archive.org API](http://archive.org/help/json.php)
* [jQuery 1.11.0](https://github.com/jquery/jquery)
* [Twitter bootstrap 2.3.2](https://github.com/twbs/bootstrap)
* [lightbox 2.7.1](https://github.com/lokesh/lightbox2/)

### Configure o link do seu bookmarks do archive.org  (opcional)
Altere o arquivo `get-bookmarks.php` para mostrar os itens do seu bookmarks do archive.org como exemplo.

```php
/*
* uncomment this line to use your bookmarks
* */
$api->set_my_bookmarks('http://archive.org/bookmarks/YourAccount');
```