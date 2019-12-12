<?php

require __DIR__ . '/class/View.php';
require __DIR__ . '/class/GuestBook.php';

$gb = new GuestBook();
$gb->loadAllRecords();

$view = new View;
$view->data['gb'] = $gb;
$view->display(__DIR__ . '/templates/index.php');