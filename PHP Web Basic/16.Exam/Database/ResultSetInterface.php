<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/4/2018
 * Time: 10:14 AM
 */

namespace Database;


interface ResultSetInterface
{
    public function fetch(?string $className = null): \Generator;
}