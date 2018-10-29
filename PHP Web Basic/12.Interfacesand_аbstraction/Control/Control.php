<?php

interface Control
{
    /**
     * @param string $fake_id
     * @return mixed
     */
    public function checkId(string $fake_id);
}