<?php

require __DIR__ . '/class/GuestBook.php';
$db = new GuestBook();

$record = new GuestBookRecord($_POST['message']);

$db->addRecord($record);
$db->save();