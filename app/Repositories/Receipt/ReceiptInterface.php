<?php

namespace App\Repositories\Receipt;

interface ReceiptInterface 
{
    public function getall($number,$idAuth);
    // public function getall();
    public function getById($id);
    public function create(array $attributes);
    public function update( array $attributes,$id);
    public function delete($id);
    public function limit($offset,$limit);
    public function getPayments($offset,$limit);
    public function getReceipts($offset,$limit);
}