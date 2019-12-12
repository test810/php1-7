<?php

require __DIR__ . '/class/GuestBook.php';
$db = new GuestBook();
$db->loadAllRecords();

$record = new GuestBookRecord($_POST['message']);
$db->addRecord($record);
$db->save();
header('Location: /');
exit();