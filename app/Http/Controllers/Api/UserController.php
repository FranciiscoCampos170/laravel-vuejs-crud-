<?php

namespace App\Http\Controllers\Api;

use App\Company;
use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        //$users = Customer::orderBy("id", "DESC")->paginate(5);
        /*$users = Customer::with([
            'company', 'country'
        ])->get();*/

        $users = DB::table('customers')
                ->join('companies', 'customers.id', '=', 'companies.users_id')
                ->join('countries', 'customers.id', '=', 'countries.users_id')
                ->paginate(5);
        return response()->json($users);
    }

    public function fetch()
    {
    }
}
