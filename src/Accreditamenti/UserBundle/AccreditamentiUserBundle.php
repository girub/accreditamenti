<?php

namespace Accreditamenti\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AccreditamentiUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
