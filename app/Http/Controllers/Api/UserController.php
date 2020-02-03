<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = Customer::orderBy("id", "DESC")->paginate(5);
        return response()->json($users);
    }
}
