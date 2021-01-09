<?php 

namespace App\Repositories\User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserInterface
{
    private $user;
    public function __construct(User $user)
    {
        $this->user=$user;
    }
    public function getall(){}
    public function getById($id)
    {
        return $this->user->find($id);
    }
    public function create(array $attributes){}
    public function update($id, array $attributes){}
    public function delete($id){}
    
}