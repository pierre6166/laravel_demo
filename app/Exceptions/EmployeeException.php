<?php

namespace App\Exceptions;

use Exception;

class EmployeeException extends Exception
{

    public static function EMPLOYEE_LOGIN_ERROR($msg = "登入錯誤", $result = "")
    {
        return json_encode(
            array(
                "Code" => 0,
                "Message" => $msg,
                "Result" =>  (empty($result)) ? null :$result
            )
        );
    }

}
