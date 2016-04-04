<?php

if(!@include(dirname(dirname(dirname(__FILE__))) . '/vendor/autoload.php') ) {
    die('You must set up the project dependencies, run the following commands:
        wget http://getcomposer.org/composer.phar
        php composer.phar install');
}
