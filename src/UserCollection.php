<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

use Traversable;

class UserCollection implements \IteratorAggregate
{
    /** @var User[] */
    private $users = [];

    public function add(User $user)
    {
        $this->users[] = $user;
    }

    public function addAll(UserCollection $users) : UserCollection
    {
        $newUsers = new UserCollection();
        $newUsers->users = array_merge($this->users, $users->users);
        return $newUsers;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->users);
    }
}
