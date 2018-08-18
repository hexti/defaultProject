<?php
/**
 * Created by PhpStorm.
 * User: erandir
 * Date: 14/08/18
 * Time: 13:26
 */

namespace SysPlenus\Helpers;


class Response
{
    public static function response(array $response, int $status)
    {
        header("HTTP/1.1 ".$status);
        header("Content-Type:application/json");

        echo json_encode($response);
    }
}