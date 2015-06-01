<?php

use Michelf\Markdown;

if (!is_readable(realpath(dirname(__DIR__)) . '/vendor/autoload.php')) {
    throw new RuntimeException('Unable to locate autoloader. Run `composer install` from the project root directory.');
}

require realpath(dirname(__DIR__)) . '/vendor/autoload.php';


function readme()
{
    $text = file_get_contents(realpath(dirname(__DIR__)) . '/README.md');
    $html = Markdown::defaultTransform($text);

    echo($html);
}

readme();
