<?php
namespace App\User\Iterators\Interfaces;


/**
 * Iterator Interface
 * Interface UserListIterator
 */
interface UserListIteratorInterface {
    public function hasNext();

    public function next();
}