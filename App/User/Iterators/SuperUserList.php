<?php
namespace App\User\Iterators;


/**
 * イテレータの共通処理
 * Trait SuperUserList
 */
trait UserListTrait
{
    private $users;
    private $position = 0;

    function __construct($users)
    {
        $this->users = $users;
    }

    public function hasNext()
    {
        return isset($this->users[$this->position]);
    }
}