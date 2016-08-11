<?php namespace Easymanage;


interface ProductRepositoryInterface
{

    public function selectAll();
    public function find($id);

}