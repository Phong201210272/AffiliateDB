<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder\Interface_;
use App\Services\Interfaces\UserServiceInterface as UserService;


class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this -> userService ->paginate();
        $config = $this->config();
        $template = 'backend.userlist.index';
        return view('backend.dashboard.layout', compact('template', 'config', 'users'));
    }
    public function config()
    {
        return [
            'js' => [
                'backend/dist/js/switchery.js'
            ],
            'css'=> [
                'backend/dist/css/switchery.css'
            ]
        ];
    }
}
