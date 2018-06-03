<?php
namespace App\User\Aggregates;


/**
 * 集約オブジェクトの共通処理
 * Trait SuperUsersAggregate
 */
trait UsersAggregateTrait
{
    private $userList;

    function __construct($users)
    {
        $this->userList = $users;
    }

    public function addUsersList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList;
    }
}