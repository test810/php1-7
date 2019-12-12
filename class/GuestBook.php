<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{

    protected $records = [];
    private $path = '';
    private $data = [];

    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($path, FILE_IGNORE_NEW_LINES);
    }

    public function loadAllRecords()
    {
        $records = [];
        foreach ($this->data as $line) {
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
        file_put_contents($this->path,implode(PHP_EOL, $ret));
    }
}