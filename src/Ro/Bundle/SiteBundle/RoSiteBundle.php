<?php

namespace Ro\Bundle\SiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RoSiteBundle extends Bundle
{

	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
