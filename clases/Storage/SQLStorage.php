<?php
namespace Bootcamp\Demo\Storage;
class SQLStorage implements Storage
{
    public function store($place, $data)
    {
        $mysqli = new mysqli("localhost", "homestead", "secret", "String");

    }

    public function get($place)
    {
        //
    }
};
