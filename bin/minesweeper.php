#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';

use Kabyfed\Minesweeper\Controller;

[$width, $height, $mines] = array_map(
    fn($index, $default) => isset($argv[$index]) ? (int)$argv[$index] : $default,
    [1, 2, 3],
    [10, 10, 10]
);

$saveToDatabase = in_array('--save', $argv, true);

// Запуск игры
Controller\startGame($width, $height, $mines, $saveToDatabase);
