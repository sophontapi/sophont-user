<?php

namespace Sophont\User\Mapper;

use Sophont\User\Entity\UserAccount;

/**
 * Class UserAccountAwareEntityInterface
 * @package Sophont\User\Mapper
 */
interface UserAccountAwareEntityInterface
{
    /**
     * Set current authenticated user if exists
     *
     * @param UserAccount $userAccount
     * @return mixed
     */
    public function setUser(UserAccount $userAccount);

    /**
     * Ger current authenticated user
     *
     * @return UserAccount
     */
    public function getUser();
}