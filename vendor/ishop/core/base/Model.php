<?php


namespace ishop\base;

use ishop\Db;

abstract class Model
{

    protected $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }

}