<?php namespace Product;


interface ProductRepository
{

    public function selectAll();
    public function selectTen();
    public function find($id);
    public function delete($id);

}