<?php

class EOrdine
{
    private int $id;
    private string $data;
    private string $ora;
    private string $stato;


    public function __construct($id, $data, $ora, $stato)
    {
        $this->id = $id;
        $this->data = $data;
        $this->ora = $ora;
        $this->stato = $stato;

    }
}