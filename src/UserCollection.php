<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

use Traversable;

/**
 * Immutable User Collection
 */
class UserCollection implements \IteratorAggregate
{
    /** @var User[] */
    private $users = [];

    public function add(User $user) : UserCollection
    {
        $users = new UserCollection();
        $users->users = $this->users;
        $users->users[] = $user;
        return $users;
    }

    public function addAll(UserCollection $users) : UserCollection
    {
        $newUsers = new UserCollection();
        $newUsers->users = array_merge($this->users, $users->users);
        return $newUsers;
    }

    public function filter(\Closure $closure) : UserCollection
    {
        $users = new UserCollection();
        $users->users = array_filter($this->users, $closure);
        return $users;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator() : Traversable
    {
        return new \ArrayIterator(array_values($this->users));
    }
}
