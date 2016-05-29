<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

use Mihaeu\Hotshowers\Helpers\UserTestHelper;

/**
 * @covers Mihaeu\Hotshowers\UserCollection
 *
 * @uses Mihaeu\Hotshowers\User
 * @uses Mihaeu\Hotshowers\UserCollection
 * @uses Mihaeu\Hotshowers\Username
 * @uses Mihaeu\Hotshowers\Email
 * @uses Mihaeu\Hotshowers\Address
 * @uses Mihaeu\Hotshowers\Password
 * @uses Mihaeu\Hotshowers\Location
 * @uses Mihaeu\Hotshowers\PhoneNumber
 * @uses Mihaeu\Hotshowers\City
 * @uses Mihaeu\Hotshowers\Country
 * @uses Mihaeu\Hotshowers\HouseNumber
 * @uses Mihaeu\Hotshowers\Street
 * @uses Mihaeu\Hotshowers\ZipCode

 */
class UserCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testIterable()
    {
        $users = (new UserCollection())
            ->add(UserTestHelper::user('user1'))
            ->add(UserTestHelper::user('user2'));
        $usersArray = iterator_to_array($users);
        $this->assertEquals(UserTestHelper::user('user1'), $usersArray[0]);
        $this->assertEquals(UserTestHelper::user('user2'), $usersArray[1]);
    }

    public function testAddAll()
    {
        $users1 = (new UserCollection())
            ->add(UserTestHelper::user('user1'))
            ->add(UserTestHelper::user('user3'));

        $users2 = (new UserCollection())
            ->add(UserTestHelper::user('user2'))
            ->add(UserTestHelper::user('user4'));

        $allUsers = $users1->addAll($users2);
        $allUsersArray = iterator_to_array($allUsers);
        $this->assertEquals(UserTestHelper::user('user1'), $allUsersArray[0]);
        $this->assertEquals(UserTestHelper::user('user3'), $allUsersArray[1]);
        $this->assertEquals(UserTestHelper::user('user2'), $allUsersArray[2]);
        $this->assertEquals(UserTestHelper::user('user4'), $allUsersArray[3]);
    }
}
