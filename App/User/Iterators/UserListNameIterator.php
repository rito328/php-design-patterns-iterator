<?php
namespace App\User\Iterators;

use App\User\Iterators\Interfaces\UserListIteratorInterface;

/**
 * 名前のみを返すイテレータ
 * Iterator Class
 * Class UserListNameIterator
 */
class UserListNameIterator implements UserListIteratorInterface {

    use UserListTrait;

    public function next()
    {
        return $this->users[$this->position++];
    }
}