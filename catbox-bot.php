<?php

use CatboxPhpBot\app\Console\CatboxBot;

include "vendor/autoload.php";
include "public/index.php";

$catboxBot = new CatboxBot();

$catboxBot->handle();