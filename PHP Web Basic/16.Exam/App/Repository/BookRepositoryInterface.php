<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/9/2018
 * Time: 11:01 AM
 */

namespace App\Repository;


use App\Data\BookDTO;


interface BookRepositoryInterface
{


    public function insert(BookDTO $book):bool;

    /**
     * @param $id
     * @return \Generator|BookDTO[]
     */
    public function findAllByUserId($id):\Generator;

    /**
     * @return \Generator|BookDTO[]
     */
    public function getAllBooks():\Generator;

    public function getOneById(int $id):BookDTO;

    public function update(BookDTO $book, int $id):bool;

    public function drop(int $id):bool;

}