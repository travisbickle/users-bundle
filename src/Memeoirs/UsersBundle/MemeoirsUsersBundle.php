<?php

namespace Memeoirs\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MemeoirsUsersBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
