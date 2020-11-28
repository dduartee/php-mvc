<?php

interface IProducts 
{
    public function getAll();
    public function getByID(int $id);
    public function getByURI(string $uri);
    public function getStockByID(int $id, int $quantity);
    public function getStockByURI(string $uri, int $quantity);
}