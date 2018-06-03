<?php
namespace App\User;

use App\User\Aggregates\Interfaces\UsersAggregateInterface;

/**
 * クライアント
 * Client Class
 * Class RosterClient
 */
class RosterClient {

    private $userIterator;

    function __construct(UsersAggregateInterface $user_list)
    {
        $this->userIterator = $user_list->createIterator();
    }

    function getUsers()
    {
        while ($this->userIterator->hasNext()) {
            $user = $this->userIterator->next();
            echo $user;
            echo "<br>";
        }
    }
}