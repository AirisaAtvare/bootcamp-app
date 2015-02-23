<?php

namespace Bootcamp\Demo\Storage;

interface Storage
{

    public function store($place, $data);

    public function get($place);
}
