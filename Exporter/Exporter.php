<?php

interface Exportable
{
    public function export();
}

interface Importable
{
    public function import();
}

abstract class Exporter implements Exportable
{
    protected $format;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
        if (!$this->is_valid()) {
            exit('invalid data!');
        }
    }

    public function is_valid(): bool
    {
        foreach ($this->data as $field) {
            if (empty($field)) {
                return false;
            }
        }
        return true;
    }
}