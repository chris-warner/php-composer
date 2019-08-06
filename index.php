<?php

require 'vendor/autoload.php';


use Intervention\Image\ImageManagerStatic as Image;

$Image = Image::make('img/php.jpeg')->resize(300,200)->save('img/php-2.jpeg',100);

echo '<img src="img/php-2.jpeg" alt=""/>';