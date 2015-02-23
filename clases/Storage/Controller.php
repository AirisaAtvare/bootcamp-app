<?php
namespace Bootcamp\Demo\Storage;

class Controller
{
    public function __construct(Storage $store)
    {
        $this->s = $store;
    }
    public function doSomething()
    {
        $data = $_REQUEST;
        store("tmp", $data);
        $this->s->store("tmp",$data);
    }
}
