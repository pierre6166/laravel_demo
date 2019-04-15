<?php

namespace App\Repository;

use App\Exceptions\EmployeeException;

use DB;

class EmployeeRepository
{
    public function __construct()
    {
        //DB::connection()->enableQueryLog();
    }
}
