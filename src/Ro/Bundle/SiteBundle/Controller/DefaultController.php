<?php

namespace Ro\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 *  @Route("/{name}", name ="test" ,requirements={"id" = "\d+"})
	 * @param  [type]
	 * @return [type]
	 */
    public function indexAction($name)
    {
        return $this->render('RoSiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
