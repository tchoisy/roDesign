<?php

namespace Ro\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 *  @Route("/", name ="index" )
	 * @param  [type]
	 * @return [type]
	 */
    public function indexAction()
    {
        return $this->render('RoSiteBundle:Default:index.html.twig', array());
    }

    /**
	 *  @Route("/a-propos", name ="about" )
	 * @param  [type]
	 * @return [type]
	 */
    public function aboutAction()
    {
        return $this->render('RoSiteBundle:Default:about.html.twig', array());
    }

    /**
	 *  @Route("/contact", name ="contact" )
	 * @param  [type]
	 * @return [type]
	 */
    public function contactAction()
    {
        return $this->render('RoSiteBundle:Default:contact.html.twig', array());
    }
}
