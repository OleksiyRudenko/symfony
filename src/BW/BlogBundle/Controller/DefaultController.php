<?php

namespace BW\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name,$status)
    {
        return $this->render('BWBlogBundle:Default/newsubfolder:index.html.twig', 
                array(
                    'name' => $name, 
                    'surname' => $status,
                    ));
//        $response = new \Symfony\Component\HttpFoundation\Response('<head></head><body><h1>custom content</h1></body>',404);
       // $response = new Response('<head></head><body><h1>custom content</h1></body>',404);
//        $response->headers->set($key, $values);
        return $response;
        
    }
    
    public function testRedirectAction()
    {
        return $this->redirect($this->generateUrl(
                                        'bw_blog_homepage',
                                        array(
                                            'name'      =>  'Name',
                                            'status'    =>  'Some Status',
                                        )));
        
        // return $this->redirect($this->generateUrl('route name from myBundle:routing.yml');
    }
}
