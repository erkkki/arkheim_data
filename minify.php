#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: erkhe
 * Date: 12.9.2020
 * Time: 0.25
 */

require_once 'vendor/autoload.php';

use App\Command\MinifyCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new MinifyCommand(
    __DIR__ . DIRECTORY_SEPARATOR . 'data',
    __DIR__ . DIRECTORY_SEPARATOR . 'dist'
));

$application->run();
