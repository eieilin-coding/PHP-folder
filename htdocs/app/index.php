<?php
include("vendor/autoload.php");

use Carbon\Carbon;
use Libs\Utils\Math;
use Support\Auth;

$math = new Math;
$math->add();

$auth = new Auth;
$auth->check();

echo Carbon::now()->addDay(5);