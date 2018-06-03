<?php
require_once 'autoload.php';

use App\User\RosterClient;
use App\User\Aggregates\UsersNameAggregate;
use App\User\Aggregates\UsersAggregate;

$users_01 = ["name 01", "name 02", "name 03", "name 04"];
$users_02 = [
    ["name" => "name 01", "age" => 20],
    ["name" => "name 02", "age" => 21],
    ["name" => "name 03", "age" => 22],
    ["name" => "name 04", "age" => 23]
];


$list = new RosterClient(new UsersNameAggregate($users_01));

echo $list->getUsers();

$list = new RosterClient(new UsersAggregate($users_02));

echo $list->getUsers();