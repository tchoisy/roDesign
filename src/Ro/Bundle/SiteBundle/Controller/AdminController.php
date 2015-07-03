<?php

namespace Ro\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 *  @Route("/admin-rodesign" )
 * @param  [type]
 * @return [type]
 */
class AdminController extends Controller
{
	/**
	 *  @Route("/", name ="admin-index" )
	 * @param  [type]
	 * @return [type]
	 */
    public function indexAction()
    {
        return $this->render('RoSiteBundle:Admin:index.html.twig', array());
    }
}
