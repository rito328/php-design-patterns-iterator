<?php
namespace App\User\Aggregates;

use App\User\Aggregates\Interfaces\UsersAggregateInterface;
use App\User\Iterators\UserListIterator;

/**
 * 集約オブジェクト
 * Aggregate Class
 * Class UsersAggregate
 */
class UsersAggregate implements UsersAggregateInterface {

    use UsersAggregateTrait;

    public function createIterator()
    {
        return new UserListIterator($this->userList);
    }
}