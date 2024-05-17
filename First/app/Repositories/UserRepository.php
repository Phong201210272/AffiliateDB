<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Foundation\PackageManifest;
use App\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserService
 * @package App\Service
 */
class UserRepository implements UserRepositoryInterface
{
    public function getAllPaginate(){
        return User::paginate(10);
    }
}
