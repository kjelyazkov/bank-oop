<?php

namespace App;

class Model
{
    protected static $table;
    protected static $fields;

    protected static $model;

    protected static $instance;

    public static function query()
    {
        if (self::$instance === null) {
            self::$instance = new Model();
        }

        return self::$instance;
    }

    public static function all()
    {
        return (new ModelFactory)->all(static::$table);
    }

    public static function select(...$fields)
    {
        static::$fields = implode(',', $fields);

        return self::$instance;
    }

    public static function get()
    {
        return static::$table;
        return (new ModelFactory)->get(static::$fields, static::$table);
    }
}
