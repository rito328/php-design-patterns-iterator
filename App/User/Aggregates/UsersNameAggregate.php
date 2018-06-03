<?php
namespace App\User\Aggregates;

use App\User\Aggregates\Interfaces\UsersAggregateInterface;
use App\User\Iterators\UserListNameIterator;

/**
 * 集約オブジェクト
 * Aggregate Class
 * Class UsersAggregate
 */
class UsersNameAggregate implements UsersAggregateInterface {

    use UsersAggregateTrait;

    public function createIterator()
    {
        return new UserListNameIterator($this->userList);
    }
}