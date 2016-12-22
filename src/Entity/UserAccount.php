<?php

namespace Sophont\User\Entity;

use Doctrine\ORM;

/**
 * Class UserAccount
 * @package Sophont\User
 */
class UserAccount
{
    protected $id;

    protected $login;

    protected $email;

    protected $password;
}