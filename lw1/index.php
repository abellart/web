<?php

require('User.php');
require('UserService.php');

$users = [
    new User('Яна', '123', '07/06/2015'),
    new User('Аня', '789', '01/01/2007'),
    new User('Катя', '456', '05/05/2007'),
];

echo 'Сортировка по имени (А-Я)'.PHP_EOL;
$usernameAscending = UserService::sortByUsername($users, true);
print_r($usernameAscending);

echo 'Сортировка по имени (Я-А)'.PHP_EOL;
$usernameDescending = UserService::sortByUsername($users, false);
print_r($usernameDescending);

echo 'Сортировка по дню рождения (<)'.PHP_EOL;
$birthdayAscending = UserService::sortByBirthday($users, true);
print_r($birthdayAscending);

echo 'Сортировка по дню рождения (>)'.PHP_EOL;
$birthdayDescending = UserService::sortByBirthday($users, false);
print_r($birthdayDescending);
