<?php

namespace Database;


interface ResultSetInterface
{
    public function fetch(?string $class_name = null): \Generator;
}