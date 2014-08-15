archive.org embed generator
===========================

Archive.org embed generator to wordpress

Available [here](http://archive.laborautonomo.96.lt/ "click me")

Using
-----
* [PHP 5 with cURL](https://php.net/manual/book.curl.php)
* [archive.org API](http://archive.org/help/json.php)
* [jQuery 1.11.0](https://github.com/jquery/jquery)
* [Twitter bootstrap 2.3.2](https://github.com/twbs/bootstrap)
* [lightbox 2.7.1](https://github.com/lokesh/lightbox2/)

### Configure your bookmarks archive.org (optional)
Alter the `get-bookmarks.php` file to show your bookmark's archive.org as an example

```php
/*
* uncomment this line to use your bookmarks
* */
$api->set_my_bookmarks('http://archive.org/bookmarks/YourAccount');
```