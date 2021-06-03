<?php

namespace App;

class ModelFactory
{
    protected $table;

    public function all($table)
    {
        return "SELECT * FROM " . $table;
    }

    public function get($fields, $table)
    {
        return "SELECT " . $fields . " FROM $table";
    }
}