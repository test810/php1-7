<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{

    protected $records = [];
    private $path = '';

    public function __construct($path)
    {
        $this->path = file($path, FILE_IGNORE_NEW_LINES);
        $this->loadAllRecords($this->path);
    }

    protected function loadAllRecords($path)
    {
        $records = [];
        foreach ($path as $line) {
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
        $ret = [];
        foreach ($this->records as $record) {
            $ret[] = $record->getMessage();
        }
        file_put_contents(__DIR__ . '/../gb.data',implode(PHP_EOL, $ret));
    }
}