<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/11/2019
 * Time: 3:18 PM
 */
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;

echo SayHello::world();