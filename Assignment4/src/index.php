#!/usr/bin/env php
<?php

namespace Src;
require __DIR__.'/../vendor/autoload.php';

use DateTime;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Src\WhatTime;
use Src\AddUser;
$application = new Application();

$application->add(new WhatTime());
$application->add(new AddUser());

$application->run();
