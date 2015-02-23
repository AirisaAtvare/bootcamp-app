<?php

namespace Bootcamp\Demo\Storage;

class fileStorage implements Storage
{
    public function store($place, $data)
    {
        file_put_contents($place,$data);
    }

    public function get($place)
    {
        //
    }
};
