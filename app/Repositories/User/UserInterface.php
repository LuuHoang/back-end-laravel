<?php

namespace App\Repositories\User;

interface UserInterface 
{
    public function getall();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}