<?php
namespace App\User\Iterators;

use App\User\Iterators\Interfaces\UserListIteratorInterface;

/**
 * 名前と年齢を返すイテレータ
 * Iterator Class
 * Class UserListIterator
 */
class UserListIterator implements UserListIteratorInterface {

    use UserListTrait;

    public function next()
    {
        $user = $this->users[$this->position++];
        return sprintf("%s (%s)", $user['name'], $user['age']);
    }
}