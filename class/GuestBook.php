<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{

    protected $records = [];

    public function __construct()
    {
        $this->loadAllRecords();
    }

    protected function loadAllRecords()
    {
        $lines = file(__DIR__ . '/../gb.data', FILE_IGNORE_NEW_LINES);

        $records = [];
        foreach ($lines as $line) {
            $records[] = new GuestBookRecord($line);
        }
        $this->records = $records;
    }
    public function getAllRecords()
    {
        return $this->records;
    }

    public function addRecord(GuestBookRecord $record)
    {
        $this->records[] = $record;
    }

    public function save()
    {
        file_put_contents(__DIR__ . '/../gb.data',$this->records);
    }
}