<?php
use asbamboo\autoload\Autoload;

/**
 * @var Autoload $autoload
 */
$autoload   = include dirname(__DIR__) . '/vendor/asbamboo/autoload/bootstrap.php';
$autoload->addMappingDir('asbamboo\\template\\', dirname(__DIR__));
return $autoload;