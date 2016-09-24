# amitkhare/easy-session

##EasySession is an easy to use minimal PHP session storage system

## INSTALL
### VIA COMPOSER
```sh
composer require amitkhare/easy-session dev-master
```
### VIA GIT
```sh
git clone https://github.com/amitkhare/easy-session.git
```



## EXAMPLE USAGE

### .HTACCESS FILE

```sh
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```

### MINIMAL EXAMPLE

```sh
<?php

// autoload via composer
require __DIR__.'/../vendor/autoload.php';

// OR WITHOUT COMPOSER
// require __DIR__.'/PATH-TO/EasySession.php';

// Take an instance of Router Class.
$session = new AmitKhare\EasySession();



```
