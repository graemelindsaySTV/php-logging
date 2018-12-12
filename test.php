<?php

require __DIR__ . '/vendor/autoload.php';

Logger::configure('log4php-config.xml');

$log = Logger::getLogger('console');

$log->warn("Warning msg");
$log->debug("Debug msg");
$log->info("Info msg");

$log->trace("My first message.");
$log->debug("My second message.");
$log->info("My third message.");
$log->warn("My fourth message.");
$log->error("My fifth message.");
$log->fatal("My sixth message.");
