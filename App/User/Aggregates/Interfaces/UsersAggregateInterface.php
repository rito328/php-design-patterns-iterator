<?php
namespace App\User\Aggregates\Interfaces;

/**
 * Aggregate Interface
 * Interface UsersAggregate
 */
interface UsersAggregateInterface
{
    public function createIterator();
}