<?php

// autoload via composer
require __DIR__.'/../vendor/autoload.php';

// OR WITHOUT COMPOSER
// require __DIR__.'/PATH-TO/EasySession.php';

// Take an instance of Session Class.
$sessionStoreName='MyCart';
$session = new AmitKhare\EasySession($sessionStoreName);

$key = 1;
$value = ['var1'=>123,'var2'=>'amit'];

// store item in $sessionStoreName
$session->set($key,$value);

// get item from $sessionStoreName by $key
$session->get($key);

// check if item exists in $sessionStoreName
$session->exists($key);

// all $sessionStoreName items
$session->all();

// remove specific item from $sessionStoreName
$session->remove($key);

// clear all items in $sessionStoreName
$session->clear();

// count items in $sessionStoreName
$session->count();
